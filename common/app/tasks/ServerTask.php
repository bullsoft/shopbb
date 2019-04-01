<?php
namespace PhalconPlus\DevTools\Tasks;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local as LocalAdapter;

class ServerTask extends \Phalcon\CLI\Task
{
    public function mainAction()
    {
        $this->dispatcher->forward([
            "controller" => "server",
            "action" => "help"
        ]);
        return ;
    }

    public function startAction($argv)
    {
        if(empty($argv)) {
            $this->cli->error("致命错误：请指定您要运行的模块！");
            exit(3);
        }
        // 获取模块名
        $module = $argv[0];
        // 默认端口
        $port = 8000;

        if(isset($argv[1])) {
            $port = $argv[1];
        }

        $filesystem = new Filesystem(new LocalAdapter(APP_ROOT_DIR));
        if (!$filesystem->has($module)) {
            $this->cli->backgroundRed("模块{$module}不存在，请更换名称再试！");
            exit(1);
        }

        if ($filesystem->has("{$module}/server.pid")) {
            $this->cli->backgroundRed("模块{$module}正在运行中，请关闭后再启动！");
            exit(2);
        }

        $this->cli->info("正在为您启动服务器...");

        $moduleDir = APP_ROOT_DIR . $module;

        $descriptorSpec = array(
            0 => array("pipe", "r"),  // 标准输入，子进程从此管道中读取数据
            1 => array("file", "{$moduleDir}/access.log", "a"),  // 标准输出，子进程向此管道中写入数据
            2 => array("pipe", "w"),
        );

        $cwd = $moduleDir;
        $cmd = escapeshellcmd("php -S 0.0.0.0:{$port} -t public/ .htrouter.php") . " & echo $! > {$moduleDir}/server.pid";

        /*
          $procStatus =
      array(8) {
          ["command"]=>
          string(49) "php -S localhost:8000 -t public/ .htrouter.php \&"
          ["pid"]=>
          int(81088)
          ["running"]=>
          bool(true)
          ["signaled"]=>
          bool(false)
          ["stopped"]=>
          bool(false)
          ["exitcode"]=>
          int(-1)
          ["termsig"]=>
          int(0)
          ["stopsig"]=>
          int(0)
      }
        */

        $proc = proc_open($cmd, $descriptorSpec, $pipes, $cwd);

        if(!is_resource($proc)) {
            $this->cli->backgroundRed()->out("致命错误：进程启动失败！");
            exit(3);
        }

        stream_set_blocking($pipes[0], 0);
        stream_set_blocking($pipes[2], 0);

        $errMsg = stream_get_contents($pipes[2]);

        if(!empty($errMsg)) {
            $this->cli->backgroundRed()->out(" ... 严重错误 ... ");
            $this->cli->out($errMsg);
            proc_close($proc);
            unlink($moduleDir."/server.pid");
            $this->cli->error("... 启动失败，请仔细检查后重试!");
            exit(4);
        }
        $procStatus = proc_get_status($proc);

        $this->cli->backgroundLightBlue()->out("... 正在执行... ");
        $this->cli->json($procStatus);

        proc_close($proc);

        $this->cli->info("... 启动成功，请使用 http://localhost:{$port} 访问");
    }

    public function stopAction($argv)
    {
        if(empty($argv)) {
            $this->cli->error("致命错误：请指定您要运行的模块！");
            exit(3);
        }
        $module = $argv[0];

        $filesystem = new Filesystem(new LocalAdapter(APP_ROOT_DIR));
        if (!$filesystem->has($module)) {
            $this->cli->backgroundRed("模块{$module}不存在，请更换名称再试！");
            exit(1);
        }

        $moduleDir = APP_ROOT_DIR . $module;

        $procFile = $moduleDir . "/server.pid";
        if(!is_file($procFile)) {
            $this->cli->error("致命错误：该模块未运行！");
            exit(1);
        }
        $this->cli->info("正在关闭服务器... ");

        $procId = file_get_contents($procFile);

        $filesystem->delete($module."/server.pid");
        $cmd = escapeshellcmd("kill -9 " . intval($procId));

        $this->cli->backgroundLightBlue()->out("... 正在执行 ...");
        $this->cli->tab()->out($cmd);
        exec($cmd);
        $this->cli->info("... 关闭成功");

    }

    public function listAction()
    {
        $this->cli->br()->info("您的Phalcon+服务列表：");
        $filesystem = new Filesystem(new LocalAdapter(APP_ROOT_DIR));
        $contents = $filesystem->listContents();
        $modules = [];
        foreach($contents as $item) {
            if($item['type'] == "file") continue;
            $module = $item['basename'];
            $pidPath = "{$module}/server.pid";
            if($filesystem->has($pidPath)) {
                $configPath = "{$module}/app/config/" . APP_ENV . ".php";
                if(!$filesystem->has($configPath)) {
                    $configPath = "{$module}/app/config/config.php";
                }
                $config = new \Phalcon\Config($this->di->getBootstrap()->load(APP_ROOT_DIR . $configPath));
                $newItem = [];
                $newItem['name'] = "<light_green>".$config->application->name. "</light_green>";
                $newItem['namespace'] = $config->application->ns;
                $newItem['mode'] = $config->application->mode;
                $newItem ['create_time'] = date("Y-m-d H:i:s", $item['timestamp']);

                $pid = file_get_contents($pidPath);

                $output = [];

                $phpOS = strtolower(PHP_OS);

                if($phpOS == "darwin") {
                    exec("ps -p {$pid}", $output);
                } elseif($phpOS == "linux") {
                    exec("ps -P {$pid}", $output);
                }
                $newItem['running_command'] = join(" ", array_slice(str_getcsv($output[1], " "), -6));

                $modules[] = $newItem;
            }
        }

        if(empty($modules)) {
            $this->cli->tab()->out("空！空即是色！放开那个女孩...")->br();
        } else {
            $this->cli->table($modules);
        }
    }

    public function helpAction()
    {
        $this->cli->out('<light_yellow>帮助:<light_yellow>');
        $this->cli->out('    使用PHP内置服务器运行Phalcon+模块');

        $this->cli->br();

        $this->cli->out('<light_yellow>使用方式:<light_yellow>');
        $this->cli->out('    - 启动: /path/to/fp-devtool server start <light_red>moduleName</light_red> <blue>[listenPort]</blue>');
        $this->cli->out('    - 关闭: /path/to/fp-devtool server stop <light_red>moduleName</light_red>');
        $this->cli->out('    - 列表: /path/to/fp-devtool server list');
    }

}

<?php
namespace PhalconPlus\DevTools\Tasks;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local as LocalAdapter;

class ModelTask extends \Phalcon\CLI\Task
{
    public function mainAction()
    {
        $this->dispatcher->forward([
            "controller" => "model",
            "action" => "help"
        ]);
        return ;
    }

    public function createAction()
    {
        $this->dispatcher->forward([
            "controller" => "create-model",
            "action" => "main"
        ]);
        return ;
    }

    public function helpAction()
    {
        $this->cli->out('<light_yellow>帮助:<light_yellow>');
        $this->cli->out('    Phalcon+ORM模型工具');

        $this->cli->br();

        $this->cli->out('<light_yellow>使用方式:<light_yellow>');
        $this->cli->out('    - 创建: /path/to/fp-devtool model create');
        $this->cli->out('    - 获取模型列表: /path/to/fp-devtool model list $moduleName');
        $this->cli->out('    - 查询模型数据: /path/to/fp-devtool model find $moduleName $modelName $condition');
    }

    public function listAction($argv)
    {
        if(empty($argv)) {
            $this->cli->backgroundRed("致命错误：模块名称不能为空！");
            exit(1);
        }

        $module = $argv[0];
        $filesystem = new Filesystem(new LocalAdapter(APP_ROOT_DIR));
        if (!$filesystem->has($module)) {
            $this->cli->backgroundRed("模块{$module}不存在，请更换名称再试！");
            exit(2);
        }
        $modelPath = "{$module}/app/models/";
        $list = $filesystem->listContents($modelPath);

        if(empty($list)) {
            $this->cli->info("该模块下没有模型文件");
            exit(3);
        }

        $newList = [];
        foreach($list as $item) {
            if($item["type"] == "dir") {
                $subList = $filesystem->listContents($modelPath. $item["filename"] . "/");
                foreach($subList as $subItem) {
                    if($subItem['filename'] == "ModelBase") continue;
                    $tmp = [];
                    $tmp['model_name'] =  '<light_red>' . $item['filename'] . '</light_red>' . '<light_green>' . '\\' . $subItem['filename'] . '</light_green>';
                    $tmp['directory'] = $subItem['dirname'];
                    $tmp['create_time'] = date("Y-m-d H:i:s", $subItem['timestamp']);
                    $newList[] = $tmp;
                }
            } else {
                if($item['filename'] == "ModelBase") continue;
                $tmp = [];
                $tmp['model_name'] = '<light_green>' . $item['filename'] . '</light_green>';
                $tmp['directory'] = $item['dirname'];
                $tmp['create_time'] = date("Y-m-d H:i:s", $item['timestamp']);
                $newList[] = $tmp;
            }
        }

        $this->cli->table($newList);
    }


    public function findAction($argv)
    {
        if(count($argv) < 2) {
            $this->cli->backgroundRed("请指定模块名称和模型名称！");
            exit(1);
        }

        $module = $argv[0];
        $filesystem = new Filesystem(new LocalAdapter(APP_ROOT_DIR));
        if (!$filesystem->has($module)) {
            $this->cli->backgroundRed("模块{$module}不存在，请更换名称再试！");
            exit(2);
        }

        $modelName = $argv[1];
        $cond = isset($argv[2])?$argv[2]:"";

        $bootstrap = $this->di->getBootstrap();
        $bootstrap->dependModule($module);
        $moduleConfig = $this->di->getModuleConfig();
        $ns = $moduleConfig->application->ns;
        $modelClassName = $ns . "Models\\" . $modelName;

        if(!class_exists($modelClassName)) {
            $this->cli->backgroundRed("致命错误：模型类不存在");
            exit(3);
        }

        $result = $modelClassName::find($cond);
        if($result->count() == 0) {
            $this->cli->out("查询结果为空");
        } else {
            $this->cli->table($result->toArray());
        }
    }

}
<?php
namespace PhalconPlus\DevTools\Tasks;

class CreateExceptionTask extends \Phalcon\CLI\Task
{
    protected $tokens = array(
        "<<<namespace>>>",
        "<<<className>>>",
        "<<<parentClassName>>>",
        "<<<code>>>",
        "<<<message>>>",
        "<<<level>>>",
    );

    public function mainAction()
    {
        $this->cli->info('现在开始引导您创建Phalcon+异常类 ...');
        $that = $this;

        // ------ 获取模块的名字 -------
        $input = $this->cli->input("<green><bold>Step 1 </bold></green>请输入EnumExceptionCode类的位置（相对于". APP_ROOT_DIR. "），默认值\"common/protos\"" . PHP_EOL. "[Enter]:");
        $input->defaultTo("common/protos");
        $path = $input->prompt();

        $this->generate($path);

    }

    public function generate($path)
    {
        $tokens = $this->tokens;

        $enumExceptionFilePath = APP_ROOT_DIR . $path . "/EnumExceptionCode.php";
        $fileReflector = new \Zend\Code\Reflection\FileReflection($enumExceptionFilePath, true);
        $ns = $fileReflector->getNamespace();

        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            $ns => APP_ROOT_DIR . $path . "/"
        ))->register();

        // 异常类名
        $enumExceptionClass = $ns . "\\EnumExceptionCode";

        $enumExceptionCode = $enumExceptionClass::validValues(true);
        $exceptionNS = $enumExceptionClass::exceptionClassPrefix();

        $dir = APP_ROOT_DIR . $path ."/Exceptions/";
        if(!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $classTemplate = file_get_contents(APP_MODULE_DIR . "app/templates/exception/default.php.volt");

        $parentClass = "\PhalconPlus\Com\Protos\ExceptionBase";
        if (!class_exists($parentClass)) {
            $parentClass = "\PhalconPlus\Base\Exception";
        }

        $padding = $this->cli->padding(18);
        foreach ($enumExceptionCode as $className => $code) {
            $replacement = [];
            $replacement["namespace"] = rtrim($exceptionNS, "\\");
            $replacement["className"] = \Phalcon\Text::camelize($className) . "Exception";
            $replacement["parentClassName"] = $parentClass;
            $replacement["code"] = $code;

            $eCode = new $enumExceptionClass($code);
            $replacement["message"] = var_export($eCode->getMessage()?:"未知错误", true);
            $replacement["level"] = $eCode->getLevel();

            $class = str_replace($tokens, $replacement, $classTemplate);
            $filePath = $dir . $replacement["className"] . ".php";

            $padding->label("  ". $className)->result( $filePath);

            file_put_contents($filePath, $class);

        }

        $this->cli->info(" ... 恭喜，创建成功！");
    }
}

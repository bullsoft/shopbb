<?php

namespace PhalconPlus\DevTools\Tasks;

class ExceptionTask extends \Phalcon\CLI\Task
{
    public function mainAction()
    {
        $this->dispatcher->forward([
            "controller" => "exception",
            "action" => "help"
        ]);
        return ;
    }

    public function createAction()
    {
        $this->dispatcher->forward([
            "controller" => "create-exception",
            "action" => "main"
        ]);
        return ;
    }

    public function helpAction()
    {
        $this->cli->out('<light_yellow>帮助:<light_yellow>');
        $this->cli->out('    Phalcon+异常类工具');

        $this->cli->br();

        $this->cli->out('<light_yellow>使用方式:<light_yellow>');
        $this->cli->out('    - 创建: /path/to/fp-devtool exception create');
    }
}
namespace {{rootNs}}\Tasks;

class HelpTask extends \Phalcon\CLI\Task
{
    public function initialize()
    {
        // 初始化
    }

    public function mainAction()
    {
        $climate = new \League\CLImate\CLImate();
        $climate->draw('bender');
        $climate->br()->info('欢迎使用Phalcon+Cli模块！');
    }
}
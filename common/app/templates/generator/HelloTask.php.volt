namespace {{rootNs}}\Tasks;

class HelloTask extends \Phalcon\CLI\Task
{
    public function initialize()
    {
        // 初始化
    }

    public function mainAction()
    {
        echo "Hello, Phalcon+ !" . PHP_EOL;
    }
}
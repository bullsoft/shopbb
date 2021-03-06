<?php
namespace PhalconPlus\DevTools\Tasks;

use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\PropertyGenerator;
use Zend\Code\Generator\FileGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\DocBlock\Tag;
use Zend\Code\Reflection\ClassReflection;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local as LocalAdapter;

class CreateModelTask extends \Phalcon\CLI\Task
{

    public function mainAction()
    {
        $this->cli->info('现在开始引导您创建Phalcon+ ORM模型...');
        $that = $this;

        // ------ 获取模块的名字 -------
        $input = $this->cli->input("<green><bold>Step 1 </bold></green>请输入该模块的名称，如\"api\"" . PHP_EOL. "[Enter]:");
        $input->accept(function($response) use ($that){
            $filesystem = new Filesystem(new LocalAdapter(APP_ROOT_DIR));
            if (!$filesystem->has($response)) {
                $that->cli->backgroundRed("模块{$response}不存在，请更换名称再试！");
                return false;
            }
            return !empty($response);
        });
        $name = $input->prompt();

        // ------ 获取DB连接服务名 -------
        $input = $this->cli->input("<green><bold>Step 2 </bold></green>请输入DI容器中连接DB的服务（具有写权限）的名称，如'db'" . PHP_EOL. "[Enter]:");
        $input->accept(function($response) {
            return !empty($response);
        });
        $dbService = $input->prompt();

        // --------- 是否使用数据库名作为命名空间的一部分？ ---------------
        $useDbAsNamespace = false;
        $input = $this->cli->confirm('<green><bold>Step 3 </bold></green>请确认是否使用数据库名作为模型命名空间的一部分?' . PHP_EOL . "[Enter]:");
        // Continue? [y/n]
        if ($input->confirmed()) {
            $useDbAsNamespace = true;
        }
        // ------ 获取DB名称 -------
        //$input = $this->cli->input("<green><bold>Step 3 </bold></green>请输入数据库名称（如需支持多数据库访问），如：'Acme'" . PHP_EOL. "[Enter]:");
        //$dbName = trim($input->prompt());

        $this->cli->br()->info('正在为您生成代码 ...');

        $this->generate($name, $dbService, $useDbAsNamespace);
    }

    protected function generate($module, $dbService, $useDbAsNamespace)
    {
        $bootstrap = $this->getDI()->get('bootstrap');

        // 依赖该模块
        $bootstrap->dependModule($module);

        $moduleConfig = $bootstrap->getModuleDef($module)->getConfig();

        $namespace = $moduleConfig->application->ns . 'Models';
        $modelDir = APP_ROOT_DIR . $module . "/app/models/";

        if($useDbAsNamespace == true) {
            $dbName = $this->config->{$dbService}->dbname;
            $dbName = \Phalcon\Text::camelize($dbName);
            $namespace .= "\\" . $dbName;
            $modelDir .= $dbName . "/";
        }

        // 如果models目录不存在，则创建它
        if(!is_dir($modelDir)) {
            mkdir($modelDir, 0777, true);
        }

        $filePath = $modelDir . "ModelBase.php";
        if(!is_file($filePath)) {
            $modelBaseTemplate = file_get_contents(APP_MODULE_DIR . "app/templates/generator/ModelBase.php.volt");
            $tokens = [
                "<<<namespace>>>",
            ];
            $replacements = [
                $namespace
            ];
            $modelBaseClass = str_replace($tokens, $replacements, $modelBaseTemplate);
            file_put_contents($filePath, "<?php\n" . $modelBaseClass);
        }
        $connection = $this->di->get($dbService);
        $tables = $connection->listTables();

        $padding = $this->cli->padding(26);

        foreach($tables as $table) {
            $className = \Phalcon\Text::camelize($table) . "Model";
            $filePath = $modelDir. $className . \PhalconPlus\Enum\Sys::EXT;
            $fullClassName = $namespace . '\\' . $className;

            $padding->label("  " . $fullClassName)->result($filePath);

            if (class_exists($fullClassName)) {
                $cr = new ClassReflection(new $fullClassName);
                $generator = ClassGenerator::fromReflection($cr);
                $constants = $generator->getConstants();
                foreach ($constants as $key => $val) {
                    if ($cr->getParentClass()->hasConstant($key)) {
                        $generator->removeConstant($key);
                    }
                }
            } else {
                $generator = new ClassGenerator();
            }

            $docblock = DocBlockGenerator::fromArray(array(
                'shortDescription' => 'Phalcon Model: ' . $className,
                'longDescription'  => '此文件由代码自动生成，代码依赖PhalconPlus和Zend\Code\Generator',
                'tags'             => array(
                    array(
                        'name'        => 'namespace',
                        'description' => rtrim($namespace, "\\"),
                    ),
                    array(
                        'name'        => 'license',
                        'description' => 'PhalconPlus( http://phalconplus.bullsoft.org/license-1.0.html )',
                    ),
                ),
            ));

            $generator->setName($className)
                ->setDocblock($docblock)
                ->setExtendedClass("ModelBase");

            $columns = $connection->fetchAll("DESC `$table`", \Phalcon\Db::FETCH_ASSOC);
            $columnsDefaultMap = $this->getDefaultValuesMap($columns);

            $onConstructBody = "";
            $columnMapBody = "return array(\n";

            foreach($connection->describeColumns($table) as $columnObj) {
                $columnName = $columnObj->getName();
                if(false !== strpos($columnName, "_")) {
                    $camelizeColumnName = lcfirst(\Phalcon\Text::camelize($columnName));
                } else {
                    $camelizeColumnName = $columnName;
                }
                $onConstructBody .= '$this->'.$camelizeColumnName
                                 . ' = ' . var_export($columnsDefaultMap[$columnName], true)
                                 . ";\n";
                $columnMapBody .= "    '{$columnName}' => '{$camelizeColumnName}', \n";
                $property = PropertyGenerator::fromArray(array(
                    'name' => $columnName,
                    'defaultvalue' => $columnsDefaultMap[$columnName],
                    'flags' => PropertyGenerator::FLAG_PUBLIC,
                    'docblock' => array(
                        'shortDescription' => '',
                        'tags' => array(
                            array(
                                'name' => 'var',
                                'description' => $this->getTypeString($columnObj->getType()),
                            ),
                            array(
                                'name' => 'table',
                                'description' => $table,
                            ),
                        )
                    ),
                ));
                $generator->removeProperty($columnName);
                $generator->addPropertyFromGenerator($property);
            }

            $columnMapBody .= ");\n";

            $generator->hasMethod("onConstruct") && $generator->removeMethod("onConstruct");
            $generator->hasMethod("columnMap") && $generator->removeMethod("columnMap");
            $generator->hasMethod("getSource") && $generator->removeMethod("getSource");

            $generator->addMethod(
                    'onConstruct',
                    array(),
                    MethodGenerator::FLAG_PUBLIC,
                    $onConstructBody,
                    DocBlockGenerator::fromArray(array(
                        'shortDescription' => 'When an instance created, it would be executed',
                        'longDescription'  => null,

                    ))
            );

            $generator->addMethod(
                    'columnMap',
                    array(),
                    MethodGenerator::FLAG_PUBLIC,
                    $columnMapBody,
                    DocBlockGenerator::fromArray(array(
                        'shortDescription' => 'Column map for database fields and model properties',
                        'longDescription'  => null,
                    ))
                );


            if(!$generator->hasMethod("initialize")) {
                $generator->addMethod(
                    'initialize',
                    array(),
                    MethodGenerator::FLAG_PUBLIC,
                    'parent::initialize();' . "\n" .
                    '$this->setWriteConnectionService("'. $dbService .'");' . "\n" .
                    '$this->setReadConnectionService("'.$dbService."Read".'");'
                );
            }

            $methodGenerator4 = new \Zend\Code\Generator\MethodGenerator(
                'getSource',
                array(),
                MethodGenerator::FLAG_PUBLIC,
                "return '{$table}';\n",
                DocBlockGenerator::fromArray(array(
                    'shortDescription' => 'return related table name',
                    'longDescription'  => null,

                ))
            );
            $methodGenerator4->setReturnType("string");
            $generator->addMethodFromGenerator($methodGenerator4);

            $file = new FileGenerator();
            $file->setFilename($filePath);
            $file->setNamespace($namespace);
            $file->setClass($generator);
            $file->write();
        }

        $this->cli->br()->info("... 恭喜您，创建成功！");
    }

    private function getTypeString($type)
    {
        // integer TYPE_INTEGER
        // integer TYPE_BIGINTEGER

        // integer TYPE_DATE
        // integer TYPE_TIMESTAMP
        // integer TYPE_DATETIME

        // integer TYPE_VARCHAR
        // integer TYPE_CHAR
        // integer TYPE_TEXT

        // integer TYPE_DECIMAL
        // integer TYPE_FLOAT
        // integer TYPE_DOUBLE

        // integer TYPE_BOOLEAN

        // integer TYPE_TINYBLOB
        // integer TYPE_BLOB
        // integer TYPE_MEDIUMBLOB
        // integer TYPE_LONGBLOB

        // integer TYPE_JSON
        // integer TYPE_JSONB

        switch ($type) {
            case \Phalcon\Db\Column::TYPE_BIGINTEGER:
            case \Phalcon\Db\Column::TYPE_INTEGER:
                return "integer";
            case \Phalcon\Db\Column::TYPE_DATE:
            case \Phalcon\Db\Column::TYPE_TIMESTAMP:
            case \Phalcon\Db\Column::TYPE_DATETIME:
                return "datetime";
            case \Phalcon\Db\Column::TYPE_CHAR:
            case \Phalcon\Db\Column::TYPE_TEXT:
            case \Phalcon\Db\Column::TYPE_VARCHAR:
                return "string";
            case \Phalcon\Db\Column::TYPE_FLOAT:
            case \Phalcon\Db\Column::TYPE_DOUBLE:
            case \Phalcon\Db\Column::TYPE_DECIMAL:
                return "float";
            case \Phalcon\Db\Column::TYPE_BOOLEAN:
                return "bool";
            case \Phalcon\Db\Column::TYPE_TINYBLOB:
            case \Phalcon\Db\Column::TYPE_BLOB:
            case \Phalcon\Db\Column::TYPE_MEDIUMBLOB:
            case \Phalcon\Db\Column::TYPE_LONGBLOB:
                return "blob";
            case \Phalcon\Db\Column::TYPE_JSON:
            case \Phalcon\Db\Column::TYPE_JSONB:
                return "json";
            default:
                return "unknown";
        }
    }

    private function getDefaultValuesMap($columns)
    {
        $ret = array();
        foreach ($columns as $item) {
            if(in_array($item['Type'], ['timestamp', 'date', 'datetime']) && $item['Default'] == 'CURRENT_TIMESTAMP') {
                $item['Default'] = '0001-01-01 00:00:00';
            }
            $ret[$item['Field']] = $item['Default'];
        }
        return $ret;
    }
}

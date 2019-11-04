<?php
namespace LightCloud\Uc\Entities;
use PhalconPlus\Assert\Assertion  as Assert;

trait EntityModelTrait
{
    protected $model = null;

    public function __construct(?\LightCloud\Uc\Models\ModelBase $model = null)
    {
        Assert::isString(static::$modelClass);
        Assert::notEmpty(static::$modelClass);
        $this->model = $model ?: (new static::$modelClass());
    }

    public function __get($name)
    {
        return $this->model->$name;
    }

    public function __set($name, $value)
    {
        $this->model->$name = $value;
        return $this;
    }

    public function __call($name, $arguments)
    {
        return $this->model->$name(...$arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        $result = static::$modelClass::$name(...$arguments);
        if ($result instanceof \LightCloud\Uc\Models\ModelBase) {
            return new static($result);
        }
        return $result;
    }
}
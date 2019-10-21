<?php
namespace PhalconPlus\Com\Protos;
use \PhalconPlus\Base\ProtoBuffer;
use PSX\Schema\SchemaTraverser;
use PSX\Schema\SchemaManager;
use PSX\Schema\Visitor\TypeVisitor;
use PSX\Schema\Validation\Validator;

class ProtoBase extends ProtoBuffer
{
    const NULL_VALUE = "__PhalconPlus_ProtoBuffer_NullValue__";

    public function isNull(string $property) : bool
    {
        if(!property_exists($this, $property)) {
            throw new \Exception("Property {$property} not exists in Class ". get_called_class());
        }
        return $this->{$property} == self::NULL_VALUE;
    }

    public static function newInstance(\stdClass $data) : ProtoBase
    {
        \Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');
        $schemaManager = new SchemaManager();
        // we read the schema annotations from the class
        $schema = $schemaManager->getSchema(static::class);
        try {
            $traverser = new SchemaTraverser();
            $proto  = $traverser->traverse($data, $schema, new TypeVisitor());
            return $proto;
        } catch (\PSX\Schema\ValidationException $e) {
            // the validation failed
            throw $e;
        }
    }

    public function validate() : ProtoBase
    {
       return self::newInstance($this->toObject());
    }

    public function toObject() : \stdClass
    {
        $dumper = new \PSX\Schema\Parser\Popo\Dumper();
        $record   = $dumper->dump($this);
        return \PSX\Record\Transformer::toObject($record);
    }
}
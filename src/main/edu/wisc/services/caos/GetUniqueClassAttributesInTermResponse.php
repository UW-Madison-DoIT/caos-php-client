<?php

namespace edu\wisc\services\caos;

class GetUniqueClassAttributesInTermResponse
{

    /**
     * @var classAttribute $classAttribute
     */
    protected $classAttribute = null;

    /**
     * @param classAttribute $classAttribute
     */
    public function __construct($classAttribute)
    {
      $this->classAttribute = $classAttribute;
    }

    /**
     * @return classAttribute
     */
    public function getClassAttribute()
    {
      return $this->classAttribute;
    }

    /**
     * @param classAttribute $classAttribute
     * @return \edu\wisc\services\caos\GetUniqueClassAttributesInTermResponse
     */
    public function setClassAttribute($classAttribute)
    {
      $this->classAttribute = $classAttribute;
      return $this;
    }

}

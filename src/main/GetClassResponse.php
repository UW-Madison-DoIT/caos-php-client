<?php

namespace edu\wisc\services\caos;

class GetClassResponse
{

    /**
     * @var classCustom $class
     */
    protected $class = null;

    /**
     * @param classCustom $class
     */
    public function __construct($class)
    {
      $this->class = $class;
    }

    /**
     * @return classCustom
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param classCustom $class
     * @return \edu\wisc\services\caos\GetClassResponse
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

}

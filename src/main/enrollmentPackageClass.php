<?php

namespace edu\wisc\services\caos;

class enrollmentPackageClass
{

    /**
     * @var classCustom $class
     */
    protected $class = null;

    /**
     * @var boolean $optional
     */
    protected $optional = null;

    /**
     * @param classCustom $class
     * @param boolean $optional
     */
    public function __construct($class, $optional)
    {
      $this->class = $class;
      $this->optional = $optional;
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
     * @return \edu\wisc\services\caos\enrollmentPackageClass
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOptional()
    {
      return $this->optional;
    }

    /**
     * @param boolean $optional
     * @return \edu\wisc\services\caos\enrollmentPackageClass
     */
    public function setOptional($optional)
    {
      $this->optional = $optional;
      return $this;
    }

}

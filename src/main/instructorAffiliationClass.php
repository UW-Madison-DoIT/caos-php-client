<?php

namespace edu\wisc\services\caos;

class instructorAffiliationClass
{

    /**
     * @var classCustom $class
     */
    protected $class = null;

    /**
     * @var instructor $instructor
     */
    protected $instructor = null;

    /**
     * @var string $roleCode
     */
    protected $roleCode = null;

    /**
     * @var string $roleDescription
     */
    protected $roleDescription = null;

    /**
     * @var boolean $displayInstructor
     */
    protected $displayInstructor = null;

    /**
     * @param classCustom $class
     * @param instructor $instructor
     * @param string $roleCode
     * @param string $roleDescription
     * @param boolean $displayInstructor
     */
    public function __construct($class, $instructor, $roleCode, $roleDescription, $displayInstructor)
    {
      $this->class = $class;
      $this->instructor = $instructor;
      $this->roleCode = $roleCode;
      $this->roleDescription = $roleDescription;
      $this->displayInstructor = $displayInstructor;
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
     * @return \edu\wisc\services\caos\instructorAffiliationClass
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return instructor
     */
    public function getInstructor()
    {
      return $this->instructor;
    }

    /**
     * @param instructor $instructor
     * @return \edu\wisc\services\caos\instructorAffiliationClass
     */
    public function setInstructor($instructor)
    {
      $this->instructor = $instructor;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoleCode()
    {
      return $this->roleCode;
    }

    /**
     * @param string $roleCode
     * @return \edu\wisc\services\caos\instructorAffiliationClass
     */
    public function setRoleCode($roleCode)
    {
      $this->roleCode = $roleCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoleDescription()
    {
      return $this->roleDescription;
    }

    /**
     * @param string $roleDescription
     * @return \edu\wisc\services\caos\instructorAffiliationClass
     */
    public function setRoleDescription($roleDescription)
    {
      $this->roleDescription = $roleDescription;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayInstructor()
    {
      return $this->displayInstructor;
    }

    /**
     * @param boolean $displayInstructor
     * @return \edu\wisc\services\caos\instructorAffiliationClass
     */
    public function setDisplayInstructor($displayInstructor)
    {
      $this->displayInstructor = $displayInstructor;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class instructorAffiliation
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

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
     * @param classUniqueId $classUniqueId
     * @param instructor $instructor
     * @param string $roleCode
     * @param string $roleDescription
     * @param boolean $displayInstructor
     */
    public function __construct($classUniqueId, $instructor, $roleCode, $roleDescription, $displayInstructor)
    {
      $this->classUniqueId = $classUniqueId;
      $this->instructor = $instructor;
      $this->roleCode = $roleCode;
      $this->roleDescription = $roleDescription;
      $this->displayInstructor = $displayInstructor;
    }

    /**
     * @return classUniqueId
     */
    public function getClassUniqueId()
    {
      return $this->classUniqueId;
    }

    /**
     * @param classUniqueId $classUniqueId
     * @return \edu\wisc\services\caos\instructorAffiliation
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
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
     * @return \edu\wisc\services\caos\instructorAffiliation
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
     * @return \edu\wisc\services\caos\instructorAffiliation
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
     * @return \edu\wisc\services\caos\instructorAffiliation
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
     * @return \edu\wisc\services\caos\instructorAffiliation
     */
    public function setDisplayInstructor($displayInstructor)
    {
      $this->displayInstructor = $displayInstructor;
      return $this;
    }

}

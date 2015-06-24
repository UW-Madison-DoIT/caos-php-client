<?php

class GetInstructorAffiliationsRequest
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @var boolean $displayInstructor
     */
    protected $displayInstructor = null;

    /**
     * @param classUniqueId $classUniqueId
     * @param boolean $displayInstructor
     */
    public function __construct($classUniqueId, $displayInstructor)
    {
      $this->classUniqueId = $classUniqueId;
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
     * @return GetInstructorAffiliationsRequest
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
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
     * @return GetInstructorAffiliationsRequest
     */
    public function setDisplayInstructor($displayInstructor)
    {
      $this->displayInstructor = $displayInstructor;
      return $this;
    }

}

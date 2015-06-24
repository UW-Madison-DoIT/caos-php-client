<?php

class GetInstructorAffiliationClassesForTeacherResponse
{

    /**
     * @var instructorAffiliationClass $instructorAffiliationClass
     */
    protected $instructorAffiliationClass = null;

    /**
     * @param instructorAffiliationClass $instructorAffiliationClass
     */
    public function __construct($instructorAffiliationClass)
    {
      $this->instructorAffiliationClass = $instructorAffiliationClass;
    }

    /**
     * @return instructorAffiliationClass
     */
    public function getInstructorAffiliationClass()
    {
      return $this->instructorAffiliationClass;
    }

    /**
     * @param instructorAffiliationClass $instructorAffiliationClass
     * @return GetInstructorAffiliationClassesForTeacherResponse
     */
    public function setInstructorAffiliationClass($instructorAffiliationClass)
    {
      $this->instructorAffiliationClass = $instructorAffiliationClass;
      return $this;
    }

}

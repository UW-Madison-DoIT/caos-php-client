<?php

class GetInstructorAffiliationsResponse
{

    /**
     * @var instructorAffiliation $instructorAffiliation
     */
    protected $instructorAffiliation = null;

    /**
     * @param instructorAffiliation $instructorAffiliation
     */
    public function __construct($instructorAffiliation)
    {
      $this->instructorAffiliation = $instructorAffiliation;
    }

    /**
     * @return instructorAffiliation
     */
    public function getInstructorAffiliation()
    {
      return $this->instructorAffiliation;
    }

    /**
     * @param instructorAffiliation $instructorAffiliation
     * @return GetInstructorAffiliationsResponse
     */
    public function setInstructorAffiliation($instructorAffiliation)
    {
      $this->instructorAffiliation = $instructorAffiliation;
      return $this;
    }

}

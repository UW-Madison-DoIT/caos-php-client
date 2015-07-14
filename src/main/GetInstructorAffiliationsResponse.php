<?php

namespace edu\wisc\services\caos;

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
     * @return \edu\wisc\services\caos\GetInstructorAffiliationsResponse
     */
    public function setInstructorAffiliation($instructorAffiliation)
    {
      $this->instructorAffiliation = $instructorAffiliation;
      return $this;
    }

}

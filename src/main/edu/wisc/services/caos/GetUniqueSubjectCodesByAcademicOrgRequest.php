<?php

namespace edu\wisc\services\caos;

class GetUniqueSubjectCodesByAcademicOrgRequest
{

    /**
     * @var string $academicOrg
     */
    protected $academicOrg = null;

    /**
     * @param string $academicOrg
     */
    public function __construct($academicOrg)
    {
      $this->academicOrg = $academicOrg;
    }

    /**
     * @return string
     */
    public function getAcademicOrg()
    {
      return $this->academicOrg;
    }

    /**
     * @param string $academicOrg
     * @return \edu\wisc\services\caos\GetUniqueSubjectCodesByAcademicOrgRequest
     */
    public function setAcademicOrg($academicOrg)
    {
      $this->academicOrg = $academicOrg;
      return $this;
    }

}

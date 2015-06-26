<?php

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
     * @return GetUniqueSubjectCodesByAcademicOrgRequest
     */
    public function setAcademicOrg($academicOrg)
    {
      $this->academicOrg = $academicOrg;
      return $this;
    }

}

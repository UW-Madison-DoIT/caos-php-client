<?php

class GetSubjectsInTermRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $academicOrg
     */
    protected $academicOrg = null;

    /**
     * @param termCodeType $termCode
     * @param string $academicOrg
     */
    public function __construct($termCode, $academicOrg)
    {
      $this->termCode = $termCode;
      $this->academicOrg = $academicOrg;
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return GetSubjectsInTermRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
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
     * @return GetSubjectsInTermRequest
     */
    public function setAcademicOrg($academicOrg)
    {
      $this->academicOrg = $academicOrg;
      return $this;
    }

}

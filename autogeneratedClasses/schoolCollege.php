<?php

class schoolCollege
{

    /**
     * @var string $academicOrgCode
     */
    protected $academicOrgCode = null;

    /**
     * @var string $academicGroupCode
     */
    protected $academicGroupCode = null;

    /**
     * @var string $shortDescription
     */
    protected $shortDescription = null;

    /**
     * @var string $formalDescription
     */
    protected $formalDescription = null;

    /**
     * @var string $uddsCode
     */
    protected $uddsCode = null;

    /**
     * @var string $schoolCollegeURI
     */
    protected $schoolCollegeURI = null;

    /**
     * @param string $academicOrgCode
     * @param string $academicGroupCode
     * @param string $shortDescription
     * @param string $formalDescription
     * @param string $uddsCode
     * @param string $schoolCollegeURI
     */
    public function __construct($academicOrgCode, $academicGroupCode, $shortDescription, $formalDescription, $uddsCode, $schoolCollegeURI)
    {
      $this->academicOrgCode = $academicOrgCode;
      $this->academicGroupCode = $academicGroupCode;
      $this->shortDescription = $shortDescription;
      $this->formalDescription = $formalDescription;
      $this->uddsCode = $uddsCode;
      $this->schoolCollegeURI = $schoolCollegeURI;
    }

    /**
     * @return string
     */
    public function getAcademicOrgCode()
    {
      return $this->academicOrgCode;
    }

    /**
     * @param string $academicOrgCode
     * @return schoolCollege
     */
    public function setAcademicOrgCode($academicOrgCode)
    {
      $this->academicOrgCode = $academicOrgCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcademicGroupCode()
    {
      return $this->academicGroupCode;
    }

    /**
     * @param string $academicGroupCode
     * @return schoolCollege
     */
    public function setAcademicGroupCode($academicGroupCode)
    {
      $this->academicGroupCode = $academicGroupCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
      return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return schoolCollege
     */
    public function setShortDescription($shortDescription)
    {
      $this->shortDescription = $shortDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormalDescription()
    {
      return $this->formalDescription;
    }

    /**
     * @param string $formalDescription
     * @return schoolCollege
     */
    public function setFormalDescription($formalDescription)
    {
      $this->formalDescription = $formalDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getUddsCode()
    {
      return $this->uddsCode;
    }

    /**
     * @param string $uddsCode
     * @return schoolCollege
     */
    public function setUddsCode($uddsCode)
    {
      $this->uddsCode = $uddsCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSchoolCollegeURI()
    {
      return $this->schoolCollegeURI;
    }

    /**
     * @param string $schoolCollegeURI
     * @return schoolCollege
     */
    public function setSchoolCollegeURI($schoolCollegeURI)
    {
      $this->schoolCollegeURI = $schoolCollegeURI;
      return $this;
    }

}

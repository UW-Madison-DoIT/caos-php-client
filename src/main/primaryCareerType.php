<?php

namespace edu\wisc\services\caos;

class primaryCareerType
{

    /**
     * @var string $careerCode
     */
    protected $careerCode = null;

    /**
     * @var string $programName
     */
    protected $programName = null;

    /**
     * @var string $enrollmentStatusCode
     */
    protected $enrollmentStatusCode = null;

    /**
     * @var string $academicLevelDescription
     */
    protected $academicLevelDescription = null;

    /**
     * @var string $academicLoadDescription
     */
    protected $academicLoadDescription = null;

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @param string $careerCode
     * @param string $programName
     * @param string $enrollmentStatusCode
     * @param string $academicLevelDescription
     * @param string $academicLoadDescription
     * @param termCodeType $termCode
     */
    public function __construct($careerCode, $programName, $enrollmentStatusCode, $academicLevelDescription, $academicLoadDescription, $termCode)
    {
      $this->careerCode = $careerCode;
      $this->programName = $programName;
      $this->enrollmentStatusCode = $enrollmentStatusCode;
      $this->academicLevelDescription = $academicLevelDescription;
      $this->academicLoadDescription = $academicLoadDescription;
      $this->termCode = $termCode;
    }

    /**
     * @return string
     */
    public function getCareerCode()
    {
      return $this->careerCode;
    }

    /**
     * @param string $careerCode
     * @return \edu\wisc\services\caos\primaryCareerType
     */
    public function setCareerCode($careerCode)
    {
      $this->careerCode = $careerCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
      return $this->programName;
    }

    /**
     * @param string $programName
     * @return \edu\wisc\services\caos\primaryCareerType
     */
    public function setProgramName($programName)
    {
      $this->programName = $programName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnrollmentStatusCode()
    {
      return $this->enrollmentStatusCode;
    }

    /**
     * @param string $enrollmentStatusCode
     * @return \edu\wisc\services\caos\primaryCareerType
     */
    public function setEnrollmentStatusCode($enrollmentStatusCode)
    {
      $this->enrollmentStatusCode = $enrollmentStatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcademicLevelDescription()
    {
      return $this->academicLevelDescription;
    }

    /**
     * @param string $academicLevelDescription
     * @return \edu\wisc\services\caos\primaryCareerType
     */
    public function setAcademicLevelDescription($academicLevelDescription)
    {
      $this->academicLevelDescription = $academicLevelDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcademicLoadDescription()
    {
      return $this->academicLoadDescription;
    }

    /**
     * @param string $academicLoadDescription
     * @return \edu\wisc\services\caos\primaryCareerType
     */
    public function setAcademicLoadDescription($academicLoadDescription)
    {
      $this->academicLoadDescription = $academicLoadDescription;
      return $this;
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
     * @return \edu\wisc\services\caos\primaryCareerType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

}

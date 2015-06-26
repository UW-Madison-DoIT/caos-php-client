<?php

class enrollmentTermType
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $termDescription
     */
    protected $termDescription = null;

    /**
     * @var enrollmentClassType $enrollmentClass
     */
    protected $enrollmentClass = null;

    /**
     * @param termCodeType $termCode
     * @param string $termDescription
     * @param enrollmentClassType $enrollmentClass
     */
    public function __construct($termCode, $termDescription, $enrollmentClass)
    {
      $this->termCode = $termCode;
      $this->termDescription = $termDescription;
      $this->enrollmentClass = $enrollmentClass;
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
     * @return enrollmentTermType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermDescription()
    {
      return $this->termDescription;
    }

    /**
     * @param string $termDescription
     * @return enrollmentTermType
     */
    public function setTermDescription($termDescription)
    {
      $this->termDescription = $termDescription;
      return $this;
    }

    /**
     * @return enrollmentClassType
     */
    public function getEnrollmentClass()
    {
      return $this->enrollmentClass;
    }

    /**
     * @param enrollmentClassType $enrollmentClass
     * @return enrollmentTermType
     */
    public function setEnrollmentClass($enrollmentClass)
    {
      $this->enrollmentClass = $enrollmentClass;
      return $this;
    }

}

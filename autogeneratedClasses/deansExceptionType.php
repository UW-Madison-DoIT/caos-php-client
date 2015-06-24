<?php

class deansExceptionType
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
     * @var string $career
     */
    protected $career = null;

    /**
     * @var int $maxCredits
     */
    protected $maxCredits = null;

    /**
     * @param termCodeType $termCode
     * @param string $termDescription
     * @param string $career
     * @param int $maxCredits
     */
    public function __construct($termCode, $termDescription, $career, $maxCredits)
    {
      $this->termCode = $termCode;
      $this->termDescription = $termDescription;
      $this->career = $career;
      $this->maxCredits = $maxCredits;
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
     * @return deansExceptionType
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
     * @return deansExceptionType
     */
    public function setTermDescription($termDescription)
    {
      $this->termDescription = $termDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getCareer()
    {
      return $this->career;
    }

    /**
     * @param string $career
     * @return deansExceptionType
     */
    public function setCareer($career)
    {
      $this->career = $career;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxCredits()
    {
      return $this->maxCredits;
    }

    /**
     * @param int $maxCredits
     * @return deansExceptionType
     */
    public function setMaxCredits($maxCredits)
    {
      $this->maxCredits = $maxCredits;
      return $this;
    }

}

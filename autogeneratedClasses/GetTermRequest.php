<?php

class GetTermRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $courseCareerCode
     */
    protected $courseCareerCode = null;

    /**
     * @param termCodeType $termCode
     * @param string $courseCareerCode
     */
    public function __construct($termCode, $courseCareerCode)
    {
      $this->termCode = $termCode;
      $this->courseCareerCode = $courseCareerCode;
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
     * @return GetTermRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseCareerCode()
    {
      return $this->courseCareerCode;
    }

    /**
     * @param string $courseCareerCode
     * @return GetTermRequest
     */
    public function setCourseCareerCode($courseCareerCode)
    {
      $this->courseCareerCode = $courseCareerCode;
      return $this;
    }

}

<?php

class GetStudentEmplidsEnrolledInTermRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @param termCodeType $termCode
     */
    public function __construct($termCode)
    {
      $this->termCode = $termCode;
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
     * @return GetStudentEmplidsEnrolledInTermRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

}

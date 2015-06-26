<?php

class GetUniqueSubjectCodesResponse
{

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @param string $subjectCode
     */
    public function __construct($subjectCode)
    {
      $this->subjectCode = $subjectCode;
    }

    /**
     * @return string
     */
    public function getSubjectCode()
    {
      return $this->subjectCode;
    }

    /**
     * @param string $subjectCode
     * @return GetUniqueSubjectCodesResponse
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
      return $this;
    }

}

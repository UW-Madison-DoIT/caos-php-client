<?php

namespace edu\wisc\services\caos;

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
     * @return \edu\wisc\services\caos\GetUniqueSubjectCodesResponse
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
      return $this;
    }

}

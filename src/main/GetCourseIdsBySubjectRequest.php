<?php

namespace edu\wisc\services\caos;

class GetCourseIdsBySubjectRequest
{

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @param string $subjectCode
     * @param termCodeType $termCode
     */
    public function __construct($subjectCode, $termCode)
    {
      $this->subjectCode = $subjectCode;
      $this->termCode = $termCode;
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
     * @return \edu\wisc\services\caos\GetCourseIdsBySubjectRequest
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
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
     * @return \edu\wisc\services\caos\GetCourseIdsBySubjectRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

}

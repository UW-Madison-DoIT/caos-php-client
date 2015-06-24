<?php

class GetCourseWithCrossListedSubjectsRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @var string $courseId
     */
    protected $courseId = null;

    /**
     * @param termCodeType $termCode
     * @param string $subjectCode
     * @param string $courseId
     */
    public function __construct($termCode, $subjectCode, $courseId)
    {
      $this->termCode = $termCode;
      $this->subjectCode = $subjectCode;
      $this->courseId = $courseId;
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
     * @return GetCourseWithCrossListedSubjectsRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
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
     * @return GetCourseWithCrossListedSubjectsRequest
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseId()
    {
      return $this->courseId;
    }

    /**
     * @param string $courseId
     * @return GetCourseWithCrossListedSubjectsRequest
     */
    public function setCourseId($courseId)
    {
      $this->courseId = $courseId;
      return $this;
    }

}

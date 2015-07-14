<?php

namespace edu\wisc\services\caos;

class GetCourseHistoryRequest
{

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @var string $courseId
     */
    protected $courseId = null;

    /**
     * @param string $subjectCode
     * @param string $courseId
     */
    public function __construct($subjectCode, $courseId)
    {
      $this->subjectCode = $subjectCode;
      $this->courseId = $courseId;
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
     * @return \edu\wisc\services\caos\GetCourseHistoryRequest
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
     * @return \edu\wisc\services\caos\GetCourseHistoryRequest
     */
    public function setCourseId($courseId)
    {
      $this->courseId = $courseId;
      return $this;
    }

}

<?php

class GetCourseIdsBySubjectResponse
{

    /**
     * @var string $courseId
     */
    protected $courseId = null;

    /**
     * @param string $courseId
     */
    public function __construct($courseId)
    {
      $this->courseId = $courseId;
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
     * @return GetCourseIdsBySubjectResponse
     */
    public function setCourseId($courseId)
    {
      $this->courseId = $courseId;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class GetCourseWithCrossListedSubjectsResponse
{

    /**
     * @var course $course
     */
    protected $course = null;

    /**
     * @var subjectType $subject
     */
    protected $subject = null;

    /**
     * @param course $course
     * @param subjectType $subject
     */
    public function __construct($course, $subject)
    {
      $this->course = $course;
      $this->subject = $subject;
    }

    /**
     * @return course
     */
    public function getCourse()
    {
      return $this->course;
    }

    /**
     * @param course $course
     * @return \edu\wisc\services\caos\GetCourseWithCrossListedSubjectsResponse
     */
    public function setCourse($course)
    {
      $this->course = $course;
      return $this;
    }

    /**
     * @return subjectType
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param subjectType $subject
     * @return \edu\wisc\services\caos\GetCourseWithCrossListedSubjectsResponse
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

}

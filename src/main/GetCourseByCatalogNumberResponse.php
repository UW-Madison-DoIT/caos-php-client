<?php

namespace edu\wisc\services\caos;

class GetCourseByCatalogNumberResponse
{

    /**
     * @var course $course
     */
    protected $course = null;

    /**
     * @param course $course
     */
    public function __construct($course)
    {
      $this->course = $course;
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
     * @return \edu\wisc\services\caos\GetCourseByCatalogNumberResponse
     */
    public function setCourse($course)
    {
      $this->course = $course;
      return $this;
    }

}

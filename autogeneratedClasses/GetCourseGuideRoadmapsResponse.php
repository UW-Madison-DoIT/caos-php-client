<?php

class GetCourseGuideRoadmapsResponse
{

    /**
     * @var courseGuideRoadmap $courseGuideRoadmap
     */
    protected $courseGuideRoadmap = null;

    /**
     * @param courseGuideRoadmap $courseGuideRoadmap
     */
    public function __construct($courseGuideRoadmap)
    {
      $this->courseGuideRoadmap = $courseGuideRoadmap;
    }

    /**
     * @return courseGuideRoadmap
     */
    public function getCourseGuideRoadmap()
    {
      return $this->courseGuideRoadmap;
    }

    /**
     * @param courseGuideRoadmap $courseGuideRoadmap
     * @return GetCourseGuideRoadmapsResponse
     */
    public function setCourseGuideRoadmap($courseGuideRoadmap)
    {
      $this->courseGuideRoadmap = $courseGuideRoadmap;
      return $this;
    }

}

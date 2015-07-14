<?php

namespace edu\wisc\services\caos;

class GetCourseGuideRoadmapCoursesRequest
{

    /**
     * @var personQuery $personQuery
     */
    protected $personQuery = null;

    /**
     * @var string $roadmapName
     */
    protected $roadmapName = null;

    /**
     * @param personQuery $personQuery
     * @param string $roadmapName
     */
    public function __construct($personQuery, $roadmapName)
    {
      $this->personQuery = $personQuery;
      $this->roadmapName = $roadmapName;
    }

    /**
     * @return personQuery
     */
    public function getPersonQuery()
    {
      return $this->personQuery;
    }

    /**
     * @param personQuery $personQuery
     * @return \edu\wisc\services\caos\GetCourseGuideRoadmapCoursesRequest
     */
    public function setPersonQuery($personQuery)
    {
      $this->personQuery = $personQuery;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoadmapName()
    {
      return $this->roadmapName;
    }

    /**
     * @param string $roadmapName
     * @return \edu\wisc\services\caos\GetCourseGuideRoadmapCoursesRequest
     */
    public function setRoadmapName($roadmapName)
    {
      $this->roadmapName = $roadmapName;
      return $this;
    }

}

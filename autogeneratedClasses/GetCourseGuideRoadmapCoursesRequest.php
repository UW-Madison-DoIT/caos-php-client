<?php

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
     * @return GetCourseGuideRoadmapCoursesRequest
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
     * @return GetCourseGuideRoadmapCoursesRequest
     */
    public function setRoadmapName($roadmapName)
    {
      $this->roadmapName = $roadmapName;
      return $this;
    }

}

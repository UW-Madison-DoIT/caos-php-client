<?php

class GetCourseGuideRoadmapsRequest
{

    /**
     * @var personQuery $personQuery
     */
    protected $personQuery = null;

    /**
     * @param personQuery $personQuery
     */
    public function __construct($personQuery)
    {
      $this->personQuery = $personQuery;
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
     * @return GetCourseGuideRoadmapsRequest
     */
    public function setPersonQuery($personQuery)
    {
      $this->personQuery = $personQuery;
      return $this;
    }

}

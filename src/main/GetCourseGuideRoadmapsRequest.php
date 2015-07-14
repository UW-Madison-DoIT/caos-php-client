<?php

namespace edu\wisc\services\caos;

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
     * @return \edu\wisc\services\caos\GetCourseGuideRoadmapsRequest
     */
    public function setPersonQuery($personQuery)
    {
      $this->personQuery = $personQuery;
      return $this;
    }

}

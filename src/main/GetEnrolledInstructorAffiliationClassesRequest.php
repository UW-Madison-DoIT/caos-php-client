<?php

namespace edu\wisc\services\caos;

class GetEnrolledInstructorAffiliationClassesRequest
{

    /**
     * @var personQuery $personQuery
     */
    protected $personQuery = null;

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @param personQuery $personQuery
     * @param termCodeType $termCode
     */
    public function __construct($personQuery, $termCode)
    {
      $this->personQuery = $personQuery;
      $this->termCode = $termCode;
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
     * @return \edu\wisc\services\caos\GetEnrolledInstructorAffiliationClassesRequest
     */
    public function setPersonQuery($personQuery)
    {
      $this->personQuery = $personQuery;
      return $this;
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
     * @return \edu\wisc\services\caos\GetEnrolledInstructorAffiliationClassesRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

}

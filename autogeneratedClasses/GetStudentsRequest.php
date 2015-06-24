<?php

class GetStudentsRequest
{

    /**
     * @var personQuery $personQuery
     */
    protected $personQuery = null;

    /**
     * @var studentDataOptions $studentDataOptions
     */
    protected $studentDataOptions = null;

    /**
     * @param personQuery $personQuery
     * @param studentDataOptions $studentDataOptions
     */
    public function __construct($personQuery, $studentDataOptions)
    {
      $this->personQuery = $personQuery;
      $this->studentDataOptions = $studentDataOptions;
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
     * @return GetStudentsRequest
     */
    public function setPersonQuery($personQuery)
    {
      $this->personQuery = $personQuery;
      return $this;
    }

    /**
     * @return studentDataOptions
     */
    public function getStudentDataOptions()
    {
      return $this->studentDataOptions;
    }

    /**
     * @param studentDataOptions $studentDataOptions
     * @return GetStudentsRequest
     */
    public function setStudentDataOptions($studentDataOptions)
    {
      $this->studentDataOptions = $studentDataOptions;
      return $this;
    }

}

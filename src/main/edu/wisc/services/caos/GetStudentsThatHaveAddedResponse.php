<?php

namespace edu\wisc\services\caos;

class GetStudentsThatHaveAddedResponse
{

    /**
     * @var addedStudent $addedStudent
     */
    protected $addedStudent = null;

    /**
     * @param addedStudent $addedStudent
     */
    public function __construct($addedStudent)
    {
      $this->addedStudent = $addedStudent;
    }

    /**
     * @return addedStudent
     */
    public function getAddedStudent()
    {
      return $this->addedStudent;
    }

    /**
     * @param addedStudent $addedStudent
     * @return \edu\wisc\services\caos\GetStudentsThatHaveAddedResponse
     */
    public function setAddedStudent($addedStudent)
    {
      $this->addedStudent = $addedStudent;
      return $this;
    }

}

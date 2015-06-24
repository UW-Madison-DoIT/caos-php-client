<?php

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
     * @return GetStudentsThatHaveAddedResponse
     */
    public function setAddedStudent($addedStudent)
    {
      $this->addedStudent = $addedStudent;
      return $this;
    }

}

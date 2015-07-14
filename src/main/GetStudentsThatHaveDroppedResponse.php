<?php

namespace edu\wisc\services\caos;

class GetStudentsThatHaveDroppedResponse
{

    /**
     * @var droppedStudent $droppedStudent
     */
    protected $droppedStudent = null;

    /**
     * @param droppedStudent $droppedStudent
     */
    public function __construct($droppedStudent)
    {
      $this->droppedStudent = $droppedStudent;
    }

    /**
     * @return droppedStudent
     */
    public function getDroppedStudent()
    {
      return $this->droppedStudent;
    }

    /**
     * @param droppedStudent $droppedStudent
     * @return \edu\wisc\services\caos\GetStudentsThatHaveDroppedResponse
     */
    public function setDroppedStudent($droppedStudent)
    {
      $this->droppedStudent = $droppedStudent;
      return $this;
    }

}

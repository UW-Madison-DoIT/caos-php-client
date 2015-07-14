<?php

namespace edu\wisc\services\caos;

class studentGroupsType
{

    /**
     * @var studentGroupType $studentGroup
     */
    protected $studentGroup = null;

    /**
     * @param studentGroupType $studentGroup
     */
    public function __construct($studentGroup)
    {
      $this->studentGroup = $studentGroup;
    }

    /**
     * @return studentGroupType
     */
    public function getStudentGroup()
    {
      return $this->studentGroup;
    }

    /**
     * @param studentGroupType $studentGroup
     * @return \edu\wisc\services\caos\studentGroupsType
     */
    public function setStudentGroup($studentGroup)
    {
      $this->studentGroup = $studentGroup;
      return $this;
    }

}

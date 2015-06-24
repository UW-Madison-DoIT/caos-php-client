<?php

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
     * @return studentGroupsType
     */
    public function setStudentGroup($studentGroup)
    {
      $this->studentGroup = $studentGroup;
      return $this;
    }

}

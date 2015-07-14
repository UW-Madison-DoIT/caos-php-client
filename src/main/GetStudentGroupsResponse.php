<?php

namespace edu\wisc\services\caos;

class GetStudentGroupsResponse
{

    /**
     * @var studentGroupsType $studentGroups
     */
    protected $studentGroups = null;

    /**
     * @param studentGroupsType $studentGroups
     */
    public function __construct($studentGroups)
    {
      $this->studentGroups = $studentGroups;
    }

    /**
     * @return studentGroupsType
     */
    public function getStudentGroups()
    {
      return $this->studentGroups;
    }

    /**
     * @param studentGroupsType $studentGroups
     * @return \edu\wisc\services\caos\GetStudentGroupsResponse
     */
    public function setStudentGroups($studentGroups)
    {
      $this->studentGroups = $studentGroups;
      return $this;
    }

}

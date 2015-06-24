<?php

class classRoster
{

    /**
     * @var instructorAffiliation $instructorAffiliation
     */
    protected $instructorAffiliation = null;

    /**
     * @var studentClassMembership $studentClassMembership
     */
    protected $studentClassMembership = null;

    /**
     * @param instructorAffiliation $instructorAffiliation
     * @param studentClassMembership $studentClassMembership
     */
    public function __construct($instructorAffiliation, $studentClassMembership)
    {
      $this->instructorAffiliation = $instructorAffiliation;
      $this->studentClassMembership = $studentClassMembership;
    }

    /**
     * @return instructorAffiliation
     */
    public function getInstructorAffiliation()
    {
      return $this->instructorAffiliation;
    }

    /**
     * @param instructorAffiliation $instructorAffiliation
     * @return classRoster
     */
    public function setInstructorAffiliation($instructorAffiliation)
    {
      $this->instructorAffiliation = $instructorAffiliation;
      return $this;
    }

    /**
     * @return studentClassMembership
     */
    public function getStudentClassMembership()
    {
      return $this->studentClassMembership;
    }

    /**
     * @param studentClassMembership $studentClassMembership
     * @return classRoster
     */
    public function setStudentClassMembership($studentClassMembership)
    {
      $this->studentClassMembership = $studentClassMembership;
      return $this;
    }

}

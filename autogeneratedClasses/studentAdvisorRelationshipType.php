<?php

class studentAdvisorRelationshipType
{

    /**
     * @var student $student
     */
    protected $student = null;

    /**
     * @var advisorType $advisor
     */
    protected $advisor = null;

    /**
     * @var advisorCommitteeType $advisorCommittee
     */
    protected $advisorCommittee = null;

    /**
     * @var codeDescriptionPairType $role
     */
    protected $role = null;

    /**
     * @param student $student
     * @param advisorType $advisor
     * @param advisorCommitteeType $advisorCommittee
     * @param codeDescriptionPairType $role
     */
    public function __construct($student, $advisor, $advisorCommittee, $role)
    {
      $this->student = $student;
      $this->advisor = $advisor;
      $this->advisorCommittee = $advisorCommittee;
      $this->role = $role;
    }

    /**
     * @return student
     */
    public function getStudent()
    {
      return $this->student;
    }

    /**
     * @param student $student
     * @return studentAdvisorRelationshipType
     */
    public function setStudent($student)
    {
      $this->student = $student;
      return $this;
    }

    /**
     * @return advisorType
     */
    public function getAdvisor()
    {
      return $this->advisor;
    }

    /**
     * @param advisorType $advisor
     * @return studentAdvisorRelationshipType
     */
    public function setAdvisor($advisor)
    {
      $this->advisor = $advisor;
      return $this;
    }

    /**
     * @return advisorCommitteeType
     */
    public function getAdvisorCommittee()
    {
      return $this->advisorCommittee;
    }

    /**
     * @param advisorCommitteeType $advisorCommittee
     * @return studentAdvisorRelationshipType
     */
    public function setAdvisorCommittee($advisorCommittee)
    {
      $this->advisorCommittee = $advisorCommittee;
      return $this;
    }

    /**
     * @return codeDescriptionPairType
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param codeDescriptionPairType $role
     * @return studentAdvisorRelationshipType
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}

<?php

class advisorCommitteeRelationshipType
{

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
     * @param advisorType $advisor
     * @param advisorCommitteeType $advisorCommittee
     * @param codeDescriptionPairType $role
     */
    public function __construct($advisor, $advisorCommittee, $role)
    {
      $this->advisor = $advisor;
      $this->advisorCommittee = $advisorCommittee;
      $this->role = $role;
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
     * @return advisorCommitteeRelationshipType
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
     * @return advisorCommitteeRelationshipType
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
     * @return advisorCommitteeRelationshipType
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}

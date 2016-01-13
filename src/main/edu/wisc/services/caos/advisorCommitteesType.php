<?php

namespace edu\wisc\services\caos;

class advisorCommitteesType
{

    /**
     * @var advisorCommitteeType $advisorCommittee
     */
    protected $advisorCommittee = null;

    /**
     * @param advisorCommitteeType $advisorCommittee
     */
    public function __construct($advisorCommittee)
    {
      $this->advisorCommittee = $advisorCommittee;
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
     * @return \edu\wisc\services\caos\advisorCommitteesType
     */
    public function setAdvisorCommittee($advisorCommittee)
    {
      $this->advisorCommittee = $advisorCommittee;
      return $this;
    }

}

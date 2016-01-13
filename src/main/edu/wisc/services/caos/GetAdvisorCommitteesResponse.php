<?php

namespace edu\wisc\services\caos;

class GetAdvisorCommitteesResponse
{

    /**
     * @var advisorCommitteesType $advisorCommittees
     */
    protected $advisorCommittees = null;

    /**
     * @param advisorCommitteesType $advisorCommittees
     */
    public function __construct($advisorCommittees)
    {
      $this->advisorCommittees = $advisorCommittees;
    }

    /**
     * @return advisorCommitteesType
     */
    public function getAdvisorCommittees()
    {
      return $this->advisorCommittees;
    }

    /**
     * @param advisorCommitteesType $advisorCommittees
     * @return \edu\wisc\services\caos\GetAdvisorCommitteesResponse
     */
    public function setAdvisorCommittees($advisorCommittees)
    {
      $this->advisorCommittees = $advisorCommittees;
      return $this;
    }

}

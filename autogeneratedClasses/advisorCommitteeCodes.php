<?php

class advisorCommitteeCodes
{

    /**
     * @var string $advisorCommitteeCode
     */
    protected $advisorCommitteeCode = null;

    /**
     * @param string $advisorCommitteeCode
     */
    public function __construct($advisorCommitteeCode)
    {
      $this->advisorCommitteeCode = $advisorCommitteeCode;
    }

    /**
     * @return string
     */
    public function getAdvisorCommitteeCode()
    {
      return $this->advisorCommitteeCode;
    }

    /**
     * @param string $advisorCommitteeCode
     * @return advisorCommitteeCodes
     */
    public function setAdvisorCommitteeCode($advisorCommitteeCode)
    {
      $this->advisorCommitteeCode = $advisorCommitteeCode;
      return $this;
    }

}

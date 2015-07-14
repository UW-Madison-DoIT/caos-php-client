<?php

namespace edu\wisc\services\caos;

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
     * @return \edu\wisc\services\caos\advisorCommitteeCodes
     */
    public function setAdvisorCommitteeCode($advisorCommitteeCode)
    {
      $this->advisorCommitteeCode = $advisorCommitteeCode;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class advisorCommitteeType extends baseAdvisorCommittee
{

    /**
     * @var studentAdvisorRelationshipsType $studentAdvisorRelationships
     */
    protected $studentAdvisorRelationships = null;

    /**
     * @var advisorCommitteeRelationshipsType $advisorCommitteeRelationships
     */
    protected $advisorCommitteeRelationships = null;

    /**
     * @param string $id
     * @param string $description
     * @param string $type
     * @param studentAdvisorRelationshipsType $studentAdvisorRelationships
     * @param advisorCommitteeRelationshipsType $advisorCommitteeRelationships
     */
    public function __construct($id, $description, $type, $studentAdvisorRelationships, $advisorCommitteeRelationships)
    {
      parent::__construct($id, $description, $type);
      $this->studentAdvisorRelationships = $studentAdvisorRelationships;
      $this->advisorCommitteeRelationships = $advisorCommitteeRelationships;
    }

    /**
     * @return studentAdvisorRelationshipsType
     */
    public function getStudentAdvisorRelationships()
    {
      return $this->studentAdvisorRelationships;
    }

    /**
     * @param studentAdvisorRelationshipsType $studentAdvisorRelationships
     * @return \edu\wisc\services\caos\advisorCommitteeType
     */
    public function setStudentAdvisorRelationships($studentAdvisorRelationships)
    {
      $this->studentAdvisorRelationships = $studentAdvisorRelationships;
      return $this;
    }

    /**
     * @return advisorCommitteeRelationshipsType
     */
    public function getAdvisorCommitteeRelationships()
    {
      return $this->advisorCommitteeRelationships;
    }

    /**
     * @param advisorCommitteeRelationshipsType $advisorCommitteeRelationships
     * @return \edu\wisc\services\caos\advisorCommitteeType
     */
    public function setAdvisorCommitteeRelationships($advisorCommitteeRelationships)
    {
      $this->advisorCommitteeRelationships = $advisorCommitteeRelationships;
      return $this;
    }

}

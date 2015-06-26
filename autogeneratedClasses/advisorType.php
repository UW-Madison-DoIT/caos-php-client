<?php

class advisorType extends baseAdvisor
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
     * @param personAttributesType $personAttributes
     * @param studentAdvisorRelationshipsType $studentAdvisorRelationships
     * @param advisorCommitteeRelationshipsType $advisorCommitteeRelationships
     */
    public function __construct($personAttributes, $studentAdvisorRelationships, $advisorCommitteeRelationships)
    {
      parent::__construct($personAttributes);
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
     * @return advisorType
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
     * @return advisorType
     */
    public function setAdvisorCommitteeRelationships($advisorCommitteeRelationships)
    {
      $this->advisorCommitteeRelationships = $advisorCommitteeRelationships;
      return $this;
    }

}

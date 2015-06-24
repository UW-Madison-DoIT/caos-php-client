<?php

class advisorCommitteeRelationshipsType
{

    /**
     * @var advisorCommitteeRelationshipType $advisorCommitteeRelationship
     */
    protected $advisorCommitteeRelationship = null;

    /**
     * @param advisorCommitteeRelationshipType $advisorCommitteeRelationship
     */
    public function __construct($advisorCommitteeRelationship)
    {
      $this->advisorCommitteeRelationship = $advisorCommitteeRelationship;
    }

    /**
     * @return advisorCommitteeRelationshipType
     */
    public function getAdvisorCommitteeRelationship()
    {
      return $this->advisorCommitteeRelationship;
    }

    /**
     * @param advisorCommitteeRelationshipType $advisorCommitteeRelationship
     * @return advisorCommitteeRelationshipsType
     */
    public function setAdvisorCommitteeRelationship($advisorCommitteeRelationship)
    {
      $this->advisorCommitteeRelationship = $advisorCommitteeRelationship;
      return $this;
    }

}

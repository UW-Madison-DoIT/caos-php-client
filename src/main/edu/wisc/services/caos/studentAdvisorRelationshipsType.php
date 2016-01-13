<?php

namespace edu\wisc\services\caos;

class studentAdvisorRelationshipsType
{

    /**
     * @var studentAdvisorRelationshipType $studentAdvisorRelationship
     */
    protected $studentAdvisorRelationship = null;

    /**
     * @param studentAdvisorRelationshipType $studentAdvisorRelationship
     */
    public function __construct($studentAdvisorRelationship)
    {
      $this->studentAdvisorRelationship = $studentAdvisorRelationship;
    }

    /**
     * @return studentAdvisorRelationshipType
     */
    public function getStudentAdvisorRelationship()
    {
      return $this->studentAdvisorRelationship;
    }

    /**
     * @param studentAdvisorRelationshipType $studentAdvisorRelationship
     * @return \edu\wisc\services\caos\studentAdvisorRelationshipsType
     */
    public function setStudentAdvisorRelationship($studentAdvisorRelationship)
    {
      $this->studentAdvisorRelationship = $studentAdvisorRelationship;
      return $this;
    }

}

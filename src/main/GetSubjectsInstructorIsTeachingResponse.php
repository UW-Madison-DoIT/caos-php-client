<?php

namespace edu\wisc\services\caos;

class GetSubjectsInstructorIsTeachingResponse
{

    /**
     * @var subjectType $subject
     */
    protected $subject = null;

    /**
     * @param subjectType $subject
     */
    public function __construct($subject)
    {
      $this->subject = $subject;
    }

    /**
     * @return subjectType
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param subjectType $subject
     * @return \edu\wisc\services\caos\GetSubjectsInstructorIsTeachingResponse
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

}

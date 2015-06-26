<?php

class GetCrossListedSubjectsResponse
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
     * @return GetCrossListedSubjectsResponse
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

}

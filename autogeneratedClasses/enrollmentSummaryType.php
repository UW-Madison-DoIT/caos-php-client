<?php

class enrollmentSummaryType
{

    /**
     * @var enrollmentTermType $enrollmentTerm
     */
    protected $enrollmentTerm = null;

    /**
     * @param enrollmentTermType $enrollmentTerm
     */
    public function __construct($enrollmentTerm)
    {
      $this->enrollmentTerm = $enrollmentTerm;
    }

    /**
     * @return enrollmentTermType
     */
    public function getEnrollmentTerm()
    {
      return $this->enrollmentTerm;
    }

    /**
     * @param enrollmentTermType $enrollmentTerm
     * @return enrollmentSummaryType
     */
    public function setEnrollmentTerm($enrollmentTerm)
    {
      $this->enrollmentTerm = $enrollmentTerm;
      return $this;
    }

}

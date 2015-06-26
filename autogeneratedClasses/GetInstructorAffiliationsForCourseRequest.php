<?php

class GetInstructorAffiliationsForCourseRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @var string $catalogNumber
     */
    protected $catalogNumber = null;

    /**
     * @var boolean $displayInstructor
     */
    protected $displayInstructor = null;

    /**
     * @param termCodeType $termCode
     * @param string $subjectCode
     * @param string $catalogNumber
     * @param boolean $displayInstructor
     */
    public function __construct($termCode, $subjectCode, $catalogNumber, $displayInstructor)
    {
      $this->termCode = $termCode;
      $this->subjectCode = $subjectCode;
      $this->catalogNumber = $catalogNumber;
      $this->displayInstructor = $displayInstructor;
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return GetInstructorAffiliationsForCourseRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubjectCode()
    {
      return $this->subjectCode;
    }

    /**
     * @param string $subjectCode
     * @return GetInstructorAffiliationsForCourseRequest
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatalogNumber()
    {
      return $this->catalogNumber;
    }

    /**
     * @param string $catalogNumber
     * @return GetInstructorAffiliationsForCourseRequest
     */
    public function setCatalogNumber($catalogNumber)
    {
      $this->catalogNumber = $catalogNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisplayInstructor()
    {
      return $this->displayInstructor;
    }

    /**
     * @param boolean $displayInstructor
     * @return GetInstructorAffiliationsForCourseRequest
     */
    public function setDisplayInstructor($displayInstructor)
    {
      $this->displayInstructor = $displayInstructor;
      return $this;
    }

}

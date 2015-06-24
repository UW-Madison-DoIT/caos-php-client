<?php

class transferCreditType
{

    /**
     * @var string $institution
     */
    protected $institution = null;

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @var string $courseNumber
     */
    protected $courseNumber = null;

    /**
     * @var string $courseTitle
     */
    protected $courseTitle = null;

    /**
     * @var int $uwCredits
     */
    protected $uwCredits = null;

    /**
     * @var string $uwArticulatedCourse
     */
    protected $uwArticulatedCourse = null;

    /**
     * @var string $uwArticulatedCourseTitle
     */
    protected $uwArticulatedCourseTitle = null;

    /**
     * @var string $uwArticulatedCourseGEBLC
     */
    protected $uwArticulatedCourseGEBLC = null;

    /**
     * @param string $institution
     * @param termCodeType $termCode
     * @param string $subjectCode
     * @param string $courseNumber
     * @param string $courseTitle
     * @param int $uwCredits
     * @param string $uwArticulatedCourse
     * @param string $uwArticulatedCourseTitle
     * @param string $uwArticulatedCourseGEBLC
     */
    public function __construct($institution, $termCode, $subjectCode, $courseNumber, $courseTitle, $uwCredits, $uwArticulatedCourse, $uwArticulatedCourseTitle, $uwArticulatedCourseGEBLC)
    {
      $this->institution = $institution;
      $this->termCode = $termCode;
      $this->subjectCode = $subjectCode;
      $this->courseNumber = $courseNumber;
      $this->courseTitle = $courseTitle;
      $this->uwCredits = $uwCredits;
      $this->uwArticulatedCourse = $uwArticulatedCourse;
      $this->uwArticulatedCourseTitle = $uwArticulatedCourseTitle;
      $this->uwArticulatedCourseGEBLC = $uwArticulatedCourseGEBLC;
    }

    /**
     * @return string
     */
    public function getInstitution()
    {
      return $this->institution;
    }

    /**
     * @param string $institution
     * @return transferCreditType
     */
    public function setInstitution($institution)
    {
      $this->institution = $institution;
      return $this;
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
     * @return transferCreditType
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
     * @return transferCreditType
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseNumber()
    {
      return $this->courseNumber;
    }

    /**
     * @param string $courseNumber
     * @return transferCreditType
     */
    public function setCourseNumber($courseNumber)
    {
      $this->courseNumber = $courseNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseTitle()
    {
      return $this->courseTitle;
    }

    /**
     * @param string $courseTitle
     * @return transferCreditType
     */
    public function setCourseTitle($courseTitle)
    {
      $this->courseTitle = $courseTitle;
      return $this;
    }

    /**
     * @return int
     */
    public function getUwCredits()
    {
      return $this->uwCredits;
    }

    /**
     * @param int $uwCredits
     * @return transferCreditType
     */
    public function setUwCredits($uwCredits)
    {
      $this->uwCredits = $uwCredits;
      return $this;
    }

    /**
     * @return string
     */
    public function getUwArticulatedCourse()
    {
      return $this->uwArticulatedCourse;
    }

    /**
     * @param string $uwArticulatedCourse
     * @return transferCreditType
     */
    public function setUwArticulatedCourse($uwArticulatedCourse)
    {
      $this->uwArticulatedCourse = $uwArticulatedCourse;
      return $this;
    }

    /**
     * @return string
     */
    public function getUwArticulatedCourseTitle()
    {
      return $this->uwArticulatedCourseTitle;
    }

    /**
     * @param string $uwArticulatedCourseTitle
     * @return transferCreditType
     */
    public function setUwArticulatedCourseTitle($uwArticulatedCourseTitle)
    {
      $this->uwArticulatedCourseTitle = $uwArticulatedCourseTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getUwArticulatedCourseGEBLC()
    {
      return $this->uwArticulatedCourseGEBLC;
    }

    /**
     * @param string $uwArticulatedCourseGEBLC
     * @return transferCreditType
     */
    public function setUwArticulatedCourseGEBLC($uwArticulatedCourseGEBLC)
    {
      $this->uwArticulatedCourseGEBLC = $uwArticulatedCourseGEBLC;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class GetCoursesBySubjectRequest
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
     * @var boolean $currentlyTaught
     */
    protected $currentlyTaught = null;

    /**
     * @param termCodeType $termCode
     * @param string $subjectCode
     * @param boolean $currentlyTaught
     */
    public function __construct($termCode, $subjectCode, $currentlyTaught)
    {
      $this->termCode = $termCode;
      $this->subjectCode = $subjectCode;
      $this->currentlyTaught = $currentlyTaught;
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
     * @return \edu\wisc\services\caos\GetCoursesBySubjectRequest
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
     * @return \edu\wisc\services\caos\GetCoursesBySubjectRequest
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCurrentlyTaught()
    {
      return $this->currentlyTaught;
    }

    /**
     * @param boolean $currentlyTaught
     * @return \edu\wisc\services\caos\GetCoursesBySubjectRequest
     */
    public function setCurrentlyTaught($currentlyTaught)
    {
      $this->currentlyTaught = $currentlyTaught;
      return $this;
    }

}

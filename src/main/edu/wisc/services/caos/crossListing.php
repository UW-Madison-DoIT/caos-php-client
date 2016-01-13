<?php

namespace edu\wisc\services\caos;

class crossListing
{

    /**
     * @var crossListedType $crossListedType
     */
    protected $crossListedType = null;

    /**
     * @var int $primaryClassNumber
     */
    protected $primaryClassNumber = null;

    /**
     * @var subjectType $primarySubject
     */
    protected $primarySubject = null;

    /**
     * @param crossListedType $crossListedType
     * @param int $primaryClassNumber
     * @param subjectType $primarySubject
     */
    public function __construct($crossListedType, $primaryClassNumber, $primarySubject)
    {
      $this->crossListedType = $crossListedType;
      $this->primaryClassNumber = $primaryClassNumber;
      $this->primarySubject = $primarySubject;
    }

    /**
     * @return crossListedType
     */
    public function getCrossListedType()
    {
      return $this->crossListedType;
    }

    /**
     * @param crossListedType $crossListedType
     * @return \edu\wisc\services\caos\crossListing
     */
    public function setCrossListedType($crossListedType)
    {
      $this->crossListedType = $crossListedType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryClassNumber()
    {
      return $this->primaryClassNumber;
    }

    /**
     * @param int $primaryClassNumber
     * @return \edu\wisc\services\caos\crossListing
     */
    public function setPrimaryClassNumber($primaryClassNumber)
    {
      $this->primaryClassNumber = $primaryClassNumber;
      return $this;
    }

    /**
     * @return subjectType
     */
    public function getPrimarySubject()
    {
      return $this->primarySubject;
    }

    /**
     * @param subjectType $primarySubject
     * @return \edu\wisc\services\caos\crossListing
     */
    public function setPrimarySubject($primarySubject)
    {
      $this->primarySubject = $primarySubject;
      return $this;
    }

}

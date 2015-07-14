<?php

namespace edu\wisc\services\caos;

class classUniqueId
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var int $classNumber
     */
    protected $classNumber = null;

    /**
     * @param termCodeType $termCode
     * @param int $classNumber
     */
    public function __construct($termCode, $classNumber)
    {
      $this->termCode = $termCode;
      $this->classNumber = $classNumber;
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
     * @return \edu\wisc\services\caos\classUniqueId
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getClassNumber()
    {
      return $this->classNumber;
    }

    /**
     * @param int $classNumber
     * @return \edu\wisc\services\caos\classUniqueId
     */
    public function setClassNumber($classNumber)
    {
      $this->classNumber = $classNumber;
      return $this;
    }

}

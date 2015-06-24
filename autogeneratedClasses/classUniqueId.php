<?php

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
     * @return classUniqueId
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
     * @return classUniqueId
     */
    public function setClassNumber($classNumber)
    {
      $this->classNumber = $classNumber;
      return $this;
    }

}

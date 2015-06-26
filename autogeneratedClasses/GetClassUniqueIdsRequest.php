<?php

class GetClassUniqueIdsRequest
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
     * @var string $sessionCode
     */
    protected $sessionCode = null;

    /**
     * @param termCodeType $termCode
     * @param string $subjectCode
     * @param string $catalogNumber
     * @param string $sessionCode
     */
    public function __construct($termCode, $subjectCode, $catalogNumber, $sessionCode)
    {
      $this->termCode = $termCode;
      $this->subjectCode = $subjectCode;
      $this->catalogNumber = $catalogNumber;
      $this->sessionCode = $sessionCode;
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
     * @return GetClassUniqueIdsRequest
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
     * @return GetClassUniqueIdsRequest
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
     * @return GetClassUniqueIdsRequest
     */
    public function setCatalogNumber($catalogNumber)
    {
      $this->catalogNumber = $catalogNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionCode()
    {
      return $this->sessionCode;
    }

    /**
     * @param string $sessionCode
     * @return GetClassUniqueIdsRequest
     */
    public function setSessionCode($sessionCode)
    {
      $this->sessionCode = $sessionCode;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class GetCourseHistoryByCatalogNumberRequest
{

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @var string $catalogNumber
     */
    protected $catalogNumber = null;

    /**
     * @param string $subjectCode
     * @param string $catalogNumber
     */
    public function __construct($subjectCode, $catalogNumber)
    {
      $this->subjectCode = $subjectCode;
      $this->catalogNumber = $catalogNumber;
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
     * @return \edu\wisc\services\caos\GetCourseHistoryByCatalogNumberRequest
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
     * @return \edu\wisc\services\caos\GetCourseHistoryByCatalogNumberRequest
     */
    public function setCatalogNumber($catalogNumber)
    {
      $this->catalogNumber = $catalogNumber;
      return $this;
    }

}

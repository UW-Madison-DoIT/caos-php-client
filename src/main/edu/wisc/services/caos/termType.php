<?php

namespace edu\wisc\services\caos;

class termType
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $shortDescription
     */
    protected $shortDescription = null;

    /**
     * @var string $longDescription
     */
    protected $longDescription = null;

    /**
     * @var \DateTime $beginDate
     */
    protected $beginDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @var string $academicYear
     */
    protected $academicYear = null;

    /**
     * @param termCodeType $termCode
     * @param string $shortDescription
     * @param string $longDescription
     * @param \DateTime $beginDate
     * @param \DateTime $endDate
     * @param string $academicYear
     */
    public function __construct($termCode, $shortDescription, $longDescription, \DateTime $beginDate, \DateTime $endDate, $academicYear)
    {
      $this->termCode = $termCode;
      $this->shortDescription = $shortDescription;
      $this->longDescription = $longDescription;
      $this->beginDate = $beginDate->format(\DateTime::ATOM);
      $this->endDate = $endDate->format(\DateTime::ATOM);
      $this->academicYear = $academicYear;
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
     * @return \edu\wisc\services\caos\termType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
      return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return \edu\wisc\services\caos\termType
     */
    public function setShortDescription($shortDescription)
    {
      $this->shortDescription = $shortDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
      return $this->longDescription;
    }

    /**
     * @param string $longDescription
     * @return \edu\wisc\services\caos\termType
     */
    public function setLongDescription($longDescription)
    {
      $this->longDescription = $longDescription;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
      if ($this->beginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->beginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $beginDate
     * @return \edu\wisc\services\caos\termType
     */
    public function setBeginDate(\DateTime $beginDate)
    {
      $this->beginDate = $beginDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return \edu\wisc\services\caos\termType
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getAcademicYear()
    {
      return $this->academicYear;
    }

    /**
     * @param string $academicYear
     * @return \edu\wisc\services\caos\termType
     */
    public function setAcademicYear($academicYear)
    {
      $this->academicYear = $academicYear;
      return $this;
    }

}

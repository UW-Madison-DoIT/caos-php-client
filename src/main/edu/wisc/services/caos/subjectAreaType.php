<?php

namespace edu\wisc\services\caos;

class subjectAreaType
{

    /**
     * @var areaOfStudyType $areaOfStudy
     */
    protected $areaOfStudy = null;

    /**
     * @var float $units
     */
    protected $units = null;

    /**
     * @param areaOfStudyType $areaOfStudy
     * @param float $units
     */
    public function __construct($areaOfStudy, $units)
    {
      $this->areaOfStudy = $areaOfStudy;
      $this->units = $units;
    }

    /**
     * @return areaOfStudyType
     */
    public function getAreaOfStudy()
    {
      return $this->areaOfStudy;
    }

    /**
     * @param areaOfStudyType $areaOfStudy
     * @return \edu\wisc\services\caos\subjectAreaType
     */
    public function setAreaOfStudy($areaOfStudy)
    {
      $this->areaOfStudy = $areaOfStudy;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnits()
    {
      return $this->units;
    }

    /**
     * @param float $units
     * @return \edu\wisc\services\caos\subjectAreaType
     */
    public function setUnits($units)
    {
      $this->units = $units;
      return $this;
    }

}

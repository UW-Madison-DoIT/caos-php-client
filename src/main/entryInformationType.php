<?php

namespace edu\wisc\services\caos;

class entryInformationType
{

    /**
     * @var careersType $careers
     */
    protected $careers = null;

    /**
     * @param careersType $careers
     */
    public function __construct($careers)
    {
      $this->careers = $careers;
    }

    /**
     * @return careersType
     */
    public function getCareers()
    {
      return $this->careers;
    }

    /**
     * @param careersType $careers
     * @return \edu\wisc\services\caos\entryInformationType
     */
    public function setCareers($careers)
    {
      $this->careers = $careers;
      return $this;
    }

}

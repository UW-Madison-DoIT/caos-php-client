<?php

namespace edu\wisc\services\caos;

class careersType
{

    /**
     * @var careerType $career
     */
    protected $career = null;

    /**
     * @param careerType $career
     */
    public function __construct($career)
    {
      $this->career = $career;
    }

    /**
     * @return careerType
     */
    public function getCareer()
    {
      return $this->career;
    }

    /**
     * @param careerType $career
     * @return \edu\wisc\services\caos\careersType
     */
    public function setCareer($career)
    {
      $this->career = $career;
      return $this;
    }

}

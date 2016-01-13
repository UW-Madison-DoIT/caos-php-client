<?php

namespace edu\wisc\services\caos;

class range
{

    /**
     * @var int $min
     */
    protected $min = null;

    /**
     * @var float $max
     */
    protected $max = null;

    /**
     * @param int $min
     * @param float $max
     */
    public function __construct($min, $max)
    {
      $this->min = $min;
      $this->max = $max;
    }

    /**
     * @return int
     */
    public function getMin()
    {
      return $this->min;
    }

    /**
     * @param int $min
     * @return \edu\wisc\services\caos\range
     */
    public function setMin($min)
    {
      $this->min = $min;
      return $this;
    }

    /**
     * @return float
     */
    public function getMax()
    {
      return $this->max;
    }

    /**
     * @param float $max
     * @return \edu\wisc\services\caos\range
     */
    public function setMax($max)
    {
      $this->max = $max;
      return $this;
    }

}

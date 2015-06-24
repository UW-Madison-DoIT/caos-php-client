<?php

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
     * @return range
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
     * @return range
     */
    public function setMax($max)
    {
      $this->max = $max;
      return $this;
    }

}

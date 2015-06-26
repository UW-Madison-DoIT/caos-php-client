<?php

class integerRangeType
{

    /**
     * @var int $low
     */
    protected $low = null;

    /**
     * @var int $high
     */
    protected $high = null;

    /**
     * @param int $low
     * @param int $high
     */
    public function __construct($low, $high)
    {
      $this->low = $low;
      $this->high = $high;
    }

    /**
     * @return int
     */
    public function getLow()
    {
      return $this->low;
    }

    /**
     * @param int $low
     * @return integerRangeType
     */
    public function setLow($low)
    {
      $this->low = $low;
      return $this;
    }

    /**
     * @return int
     */
    public function getHigh()
    {
      return $this->high;
    }

    /**
     * @param int $high
     * @return integerRangeType
     */
    public function setHigh($high)
    {
      $this->high = $high;
      return $this;
    }

}

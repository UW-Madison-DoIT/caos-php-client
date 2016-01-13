<?php

namespace edu\wisc\services\caos;

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
     * @return \edu\wisc\services\caos\integerRangeType
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
     * @return \edu\wisc\services\caos\integerRangeType
     */
    public function setHigh($high)
    {
      $this->high = $high;
      return $this;
    }

}

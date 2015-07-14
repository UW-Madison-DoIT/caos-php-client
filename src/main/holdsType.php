<?php

namespace edu\wisc\services\caos;

class holdsType
{

    /**
     * @var holdType $hold
     */
    protected $hold = null;

    /**
     * @param holdType $hold
     */
    public function __construct($hold)
    {
      $this->hold = $hold;
    }

    /**
     * @return holdType
     */
    public function getHold()
    {
      return $this->hold;
    }

    /**
     * @param holdType $hold
     * @return \edu\wisc\services\caos\holdsType
     */
    public function setHold($hold)
    {
      $this->hold = $hold;
      return $this;
    }

}

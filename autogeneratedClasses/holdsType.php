<?php

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
     * @return holdsType
     */
    public function setHold($hold)
    {
      $this->hold = $hold;
      return $this;
    }

}

<?php

class IsCrossListedResponse
{

    /**
     * @var boolean $crosslisted
     */
    protected $crosslisted = null;

    /**
     * @param boolean $crosslisted
     */
    public function __construct($crosslisted)
    {
      $this->crosslisted = $crosslisted;
    }

    /**
     * @return boolean
     */
    public function getCrosslisted()
    {
      return $this->crosslisted;
    }

    /**
     * @param boolean $crosslisted
     * @return IsCrossListedResponse
     */
    public function setCrosslisted($crosslisted)
    {
      $this->crosslisted = $crosslisted;
      return $this;
    }

}

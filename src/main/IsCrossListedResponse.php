<?php

namespace edu\wisc\services\caos;

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
     * @return \edu\wisc\services\caos\IsCrossListedResponse
     */
    public function setCrosslisted($crosslisted)
    {
      $this->crosslisted = $crosslisted;
      return $this;
    }

}

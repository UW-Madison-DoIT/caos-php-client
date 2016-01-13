<?php

namespace edu\wisc\services\caos;

class deansExceptions
{

    /**
     * @var deansExceptionType $deansException
     */
    protected $deansException = null;

    /**
     * @param deansExceptionType $deansException
     */
    public function __construct($deansException)
    {
      $this->deansException = $deansException;
    }

    /**
     * @return deansExceptionType
     */
    public function getDeansException()
    {
      return $this->deansException;
    }

    /**
     * @param deansExceptionType $deansException
     * @return \edu\wisc\services\caos\deansExceptions
     */
    public function setDeansException($deansException)
    {
      $this->deansException = $deansException;
      return $this;
    }

}

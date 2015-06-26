<?php

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
     * @return deansExceptions
     */
    public function setDeansException($deansException)
    {
      $this->deansException = $deansException;
      return $this;
    }

}

<?php

class GetSessionsInTermRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @param termCodeType $termCode
     */
    public function __construct($termCode)
    {
      $this->termCode = $termCode;
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return GetSessionsInTermRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

}

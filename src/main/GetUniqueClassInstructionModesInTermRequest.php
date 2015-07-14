<?php

namespace edu\wisc\services\caos;

class GetUniqueClassInstructionModesInTermRequest
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
     * @return \edu\wisc\services\caos\GetUniqueClassInstructionModesInTermRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

}

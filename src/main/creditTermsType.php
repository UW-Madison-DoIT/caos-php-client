<?php

namespace edu\wisc\services\caos;

class creditTermsType
{

    /**
     * @var creditTermType $creditTerm
     */
    protected $creditTerm = null;

    /**
     * @param creditTermType $creditTerm
     */
    public function __construct($creditTerm)
    {
      $this->creditTerm = $creditTerm;
    }

    /**
     * @return creditTermType
     */
    public function getCreditTerm()
    {
      return $this->creditTerm;
    }

    /**
     * @param creditTermType $creditTerm
     * @return \edu\wisc\services\caos\creditTermsType
     */
    public function setCreditTerm($creditTerm)
    {
      $this->creditTerm = $creditTerm;
      return $this;
    }

}

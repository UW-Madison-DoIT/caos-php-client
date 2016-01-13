<?php

namespace edu\wisc\services\caos;

class GetPresentTermResponse
{

    /**
     * @var termType $term
     */
    protected $term = null;

    /**
     * @param termType $term
     */
    public function __construct($term)
    {
      $this->term = $term;
    }

    /**
     * @return termType
     */
    public function getTerm()
    {
      return $this->term;
    }

    /**
     * @param termType $term
     * @return \edu\wisc\services\caos\GetPresentTermResponse
     */
    public function setTerm($term)
    {
      $this->term = $term;
      return $this;
    }

}

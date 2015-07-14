<?php

namespace edu\wisc\services\caos;

class academicSummaryType
{

    /**
     * @var performanceTermType $performanceTerm
     */
    protected $performanceTerm = null;

    /**
     * @param performanceTermType $performanceTerm
     */
    public function __construct($performanceTerm)
    {
      $this->performanceTerm = $performanceTerm;
    }

    /**
     * @return performanceTermType
     */
    public function getPerformanceTerm()
    {
      return $this->performanceTerm;
    }

    /**
     * @param performanceTermType $performanceTerm
     * @return \edu\wisc\services\caos\academicSummaryType
     */
    public function setPerformanceTerm($performanceTerm)
    {
      $this->performanceTerm = $performanceTerm;
      return $this;
    }

}

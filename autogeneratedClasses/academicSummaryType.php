<?php

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
     * @return academicSummaryType
     */
    public function setPerformanceTerm($performanceTerm)
    {
      $this->performanceTerm = $performanceTerm;
      return $this;
    }

}

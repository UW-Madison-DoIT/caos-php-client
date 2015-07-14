<?php

namespace edu\wisc\services\caos;

class testComponentType extends codeDescriptionPairType
{

    /**
     * @var range $range
     */
    protected $range = null;

    /**
     * @var testResultsType $testResults
     */
    protected $testResults = null;

    /**
     * @param string $code
     * @param string $description
     * @param range $range
     * @param testResultsType $testResults
     */
    public function __construct($code, $description, $range, $testResults)
    {
      parent::__construct($code, $description);
      $this->range = $range;
      $this->testResults = $testResults;
    }

    /**
     * @return range
     */
    public function getRange()
    {
      return $this->range;
    }

    /**
     * @param range $range
     * @return \edu\wisc\services\caos\testComponentType
     */
    public function setRange($range)
    {
      $this->range = $range;
      return $this;
    }

    /**
     * @return testResultsType
     */
    public function getTestResults()
    {
      return $this->testResults;
    }

    /**
     * @param testResultsType $testResults
     * @return \edu\wisc\services\caos\testComponentType
     */
    public function setTestResults($testResults)
    {
      $this->testResults = $testResults;
      return $this;
    }

}

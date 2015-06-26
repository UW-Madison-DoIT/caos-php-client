<?php

class testResultsType
{

    /**
     * @var testResultType $testResult
     */
    protected $testResult = null;

    /**
     * @param testResultType $testResult
     */
    public function __construct($testResult)
    {
      $this->testResult = $testResult;
    }

    /**
     * @return testResultType
     */
    public function getTestResult()
    {
      return $this->testResult;
    }

    /**
     * @param testResultType $testResult
     * @return testResultsType
     */
    public function setTestResult($testResult)
    {
      $this->testResult = $testResult;
      return $this;
    }

}

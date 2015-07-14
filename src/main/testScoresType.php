<?php

namespace edu\wisc\services\caos;

class testScoresType
{

    /**
     * @var testType $test
     */
    protected $test = null;

    /**
     * @param testType $test
     */
    public function __construct($test)
    {
      $this->test = $test;
    }

    /**
     * @return testType
     */
    public function getTest()
    {
      return $this->test;
    }

    /**
     * @param testType $test
     * @return \edu\wisc\services\caos\testScoresType
     */
    public function setTest($test)
    {
      $this->test = $test;
      return $this;
    }

}

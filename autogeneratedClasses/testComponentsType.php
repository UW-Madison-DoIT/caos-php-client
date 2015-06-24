<?php

class testComponentsType
{

    /**
     * @var testComponentType $testComponent
     */
    protected $testComponent = null;

    /**
     * @param testComponentType $testComponent
     */
    public function __construct($testComponent)
    {
      $this->testComponent = $testComponent;
    }

    /**
     * @return testComponentType
     */
    public function getTestComponent()
    {
      return $this->testComponent;
    }

    /**
     * @param testComponentType $testComponent
     * @return testComponentsType
     */
    public function setTestComponent($testComponent)
    {
      $this->testComponent = $testComponent;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class testType extends codeDescriptionPairType
{

    /**
     * @var testComponentsType $testComponents
     */
    protected $testComponents = null;

    /**
     * @param string $code
     * @param string $description
     * @param testComponentsType $testComponents
     */
    public function __construct($code, $description, $testComponents)
    {
      parent::__construct($code, $description);
      $this->testComponents = $testComponents;
    }

    /**
     * @return testComponentsType
     */
    public function getTestComponents()
    {
      return $this->testComponents;
    }

    /**
     * @param testComponentsType $testComponents
     * @return \edu\wisc\services\caos\testType
     */
    public function setTestComponents($testComponents)
    {
      $this->testComponents = $testComponents;
      return $this;
    }

}

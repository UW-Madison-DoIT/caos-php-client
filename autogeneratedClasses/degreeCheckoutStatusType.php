<?php

class degreeCheckoutStatusType extends codeDescriptionPairType
{

    /**
     * @var string $expectedGraduationTermCode
     */
    protected $expectedGraduationTermCode = null;

    /**
     * @var string $expectedGraduationTermDescription
     */
    protected $expectedGraduationTermDescription = null;

    /**
     * @param string $code
     * @param string $description
     * @param string $expectedGraduationTermCode
     * @param string $expectedGraduationTermDescription
     */
    public function __construct($code, $description, $expectedGraduationTermCode, $expectedGraduationTermDescription)
    {
      parent::__construct($code, $description);
      $this->expectedGraduationTermCode = $expectedGraduationTermCode;
      $this->expectedGraduationTermDescription = $expectedGraduationTermDescription;
    }

    /**
     * @return string
     */
    public function getExpectedGraduationTermCode()
    {
      return $this->expectedGraduationTermCode;
    }

    /**
     * @param string $expectedGraduationTermCode
     * @return degreeCheckoutStatusType
     */
    public function setExpectedGraduationTermCode($expectedGraduationTermCode)
    {
      $this->expectedGraduationTermCode = $expectedGraduationTermCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpectedGraduationTermDescription()
    {
      return $this->expectedGraduationTermDescription;
    }

    /**
     * @param string $expectedGraduationTermDescription
     * @return degreeCheckoutStatusType
     */
    public function setExpectedGraduationTermDescription($expectedGraduationTermDescription)
    {
      $this->expectedGraduationTermDescription = $expectedGraduationTermDescription;
      return $this;
    }

}

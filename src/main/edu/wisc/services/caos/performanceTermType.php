<?php

namespace edu\wisc\services\caos;

class performanceTermType
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $termDescription
     */
    protected $termDescription = null;

    /**
     * @var gpaType $cumGPA
     */
    protected $cumGPA = null;

    /**
     * @var gpaType $termGPA
     */
    protected $termGPA = null;

    /**
     * @var academicStandingActionsType $academicStandingActions
     */
    protected $academicStandingActions = null;

    /**
     * @param termCodeType $termCode
     * @param string $termDescription
     * @param gpaType $cumGPA
     * @param gpaType $termGPA
     * @param academicStandingActionsType $academicStandingActions
     */
    public function __construct($termCode, $termDescription, $cumGPA, $termGPA, $academicStandingActions)
    {
      $this->termCode = $termCode;
      $this->termDescription = $termDescription;
      $this->cumGPA = $cumGPA;
      $this->termGPA = $termGPA;
      $this->academicStandingActions = $academicStandingActions;
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return \edu\wisc\services\caos\performanceTermType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermDescription()
    {
      return $this->termDescription;
    }

    /**
     * @param string $termDescription
     * @return \edu\wisc\services\caos\performanceTermType
     */
    public function setTermDescription($termDescription)
    {
      $this->termDescription = $termDescription;
      return $this;
    }

    /**
     * @return gpaType
     */
    public function getCumGPA()
    {
      return $this->cumGPA;
    }

    /**
     * @param gpaType $cumGPA
     * @return \edu\wisc\services\caos\performanceTermType
     */
    public function setCumGPA($cumGPA)
    {
      $this->cumGPA = $cumGPA;
      return $this;
    }

    /**
     * @return gpaType
     */
    public function getTermGPA()
    {
      return $this->termGPA;
    }

    /**
     * @param gpaType $termGPA
     * @return \edu\wisc\services\caos\performanceTermType
     */
    public function setTermGPA($termGPA)
    {
      $this->termGPA = $termGPA;
      return $this;
    }

    /**
     * @return academicStandingActionsType
     */
    public function getAcademicStandingActions()
    {
      return $this->academicStandingActions;
    }

    /**
     * @param academicStandingActionsType $academicStandingActions
     * @return \edu\wisc\services\caos\performanceTermType
     */
    public function setAcademicStandingActions($academicStandingActions)
    {
      $this->academicStandingActions = $academicStandingActions;
      return $this;
    }

}

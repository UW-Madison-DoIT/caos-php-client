<?php

namespace edu\wisc\services\caos;

class programType extends codeDescriptionPairType
{

    /**
     * @var degreeCheckoutStatusType $degreeCheckoutStatus
     */
    protected $degreeCheckoutStatus = null;

    /**
     * @var schoolCollege $schoolCollege
     */
    protected $schoolCollege = null;

    /**
     * @var careerType $career
     */
    protected $career = null;

    /**
     * @var plansType $plans
     */
    protected $plans = null;

    /**
     * @param string $code
     * @param string $description
     * @param degreeCheckoutStatusType $degreeCheckoutStatus
     * @param schoolCollege $schoolCollege
     * @param careerType $career
     * @param plansType $plans
     */
    public function __construct($code, $description, $degreeCheckoutStatus, $schoolCollege, $career, $plans)
    {
      parent::__construct($code, $description);
      $this->degreeCheckoutStatus = $degreeCheckoutStatus;
      $this->schoolCollege = $schoolCollege;
      $this->career = $career;
      $this->plans = $plans;
    }

    /**
     * @return degreeCheckoutStatusType
     */
    public function getDegreeCheckoutStatus()
    {
      return $this->degreeCheckoutStatus;
    }

    /**
     * @param degreeCheckoutStatusType $degreeCheckoutStatus
     * @return \edu\wisc\services\caos\programType
     */
    public function setDegreeCheckoutStatus($degreeCheckoutStatus)
    {
      $this->degreeCheckoutStatus = $degreeCheckoutStatus;
      return $this;
    }

    /**
     * @return schoolCollege
     */
    public function getSchoolCollege()
    {
      return $this->schoolCollege;
    }

    /**
     * @param schoolCollege $schoolCollege
     * @return \edu\wisc\services\caos\programType
     */
    public function setSchoolCollege($schoolCollege)
    {
      $this->schoolCollege = $schoolCollege;
      return $this;
    }

    /**
     * @return careerType
     */
    public function getCareer()
    {
      return $this->career;
    }

    /**
     * @param careerType $career
     * @return \edu\wisc\services\caos\programType
     */
    public function setCareer($career)
    {
      $this->career = $career;
      return $this;
    }

    /**
     * @return plansType
     */
    public function getPlans()
    {
      return $this->plans;
    }

    /**
     * @param plansType $plans
     * @return \edu\wisc\services\caos\programType
     */
    public function setPlans($plans)
    {
      $this->plans = $plans;
      return $this;
    }

}

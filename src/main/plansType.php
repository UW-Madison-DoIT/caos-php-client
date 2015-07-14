<?php

namespace edu\wisc\services\caos;

class plansType
{

    /**
     * @var planType[] $plan
     */
    protected $plan = null;

    /**
     * @param planType[] $plan
     */
    public function __construct(array $plan)
    {
      $this->plan = $plan;
    }

    /**
     * @return planType[]
     */
    public function getPlan()
    {
      return $this->plan;
    }

    /**
     * @param planType[] $plan
     * @return \edu\wisc\services\caos\plansType
     */
    public function setPlan(array $plan)
    {
      $this->plan = $plan;
      return $this;
    }

}

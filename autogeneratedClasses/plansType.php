<?php

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
     * @return plansType
     */
    public function setPlan(array $plan)
    {
      $this->plan = $plan;
      return $this;
    }

}

<?php

class subPlansType
{

    /**
     * @var subPlanType[] $subPlan
     */
    protected $subPlan = null;

    /**
     * @param subPlanType[] $subPlan
     */
    public function __construct(array $subPlan)
    {
      $this->subPlan = $subPlan;
    }

    /**
     * @return subPlanType[]
     */
    public function getSubPlan()
    {
      return $this->subPlan;
    }

    /**
     * @param subPlanType[] $subPlan
     * @return subPlansType
     */
    public function setSubPlan(array $subPlan)
    {
      $this->subPlan = $subPlan;
      return $this;
    }

}

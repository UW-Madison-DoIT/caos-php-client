<?php

class advisorsType
{

    /**
     * @var advisorType $advisor
     */
    protected $advisor = null;

    /**
     * @param advisorType $advisor
     */
    public function __construct($advisor)
    {
      $this->advisor = $advisor;
    }

    /**
     * @return advisorType
     */
    public function getAdvisor()
    {
      return $this->advisor;
    }

    /**
     * @param advisorType $advisor
     * @return advisorsType
     */
    public function setAdvisor($advisor)
    {
      $this->advisor = $advisor;
      return $this;
    }

}

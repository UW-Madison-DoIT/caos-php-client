<?php

namespace edu\wisc\services\caos;

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
     * @return \edu\wisc\services\caos\advisorsType
     */
    public function setAdvisor($advisor)
    {
      $this->advisor = $advisor;
      return $this;
    }

}

<?php

class GetAdvisorsResponse
{

    /**
     * @var advisorsType $advisors
     */
    protected $advisors = null;

    /**
     * @param advisorsType $advisors
     */
    public function __construct($advisors)
    {
      $this->advisors = $advisors;
    }

    /**
     * @return advisorsType
     */
    public function getAdvisors()
    {
      return $this->advisors;
    }

    /**
     * @param advisorsType $advisors
     * @return GetAdvisorsResponse
     */
    public function setAdvisors($advisors)
    {
      $this->advisors = $advisors;
      return $this;
    }

}

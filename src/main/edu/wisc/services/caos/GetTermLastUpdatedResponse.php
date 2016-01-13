<?php

namespace edu\wisc\services\caos;

class GetTermLastUpdatedResponse
{

    /**
     * @var \DateTime $lastUpdated
     */
    protected $lastUpdated = null;

    /**
     * @param \DateTime $lastUpdated
     */
    public function __construct(\DateTime $lastUpdated)
    {
      $this->lastUpdated = $lastUpdated->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
      if ($this->lastUpdated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastUpdated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastUpdated
     * @return \edu\wisc\services\caos\GetTermLastUpdatedResponse
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
      $this->lastUpdated = $lastUpdated->format(\DateTime::ATOM);
      return $this;
    }

}

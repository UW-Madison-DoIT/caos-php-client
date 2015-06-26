<?php

class session
{

    /**
     * @var string $sessionCode
     */
    protected $sessionCode = null;

    /**
     * @var string $sessionDescription
     */
    protected $sessionDescription = null;

    /**
     * @var \DateTime $beginDate
     */
    protected $beginDate = null;

    /**
     * @var \DateTime $endDate
     */
    protected $endDate = null;

    /**
     * @param string $sessionCode
     * @param string $sessionDescription
     * @param \DateTime $beginDate
     * @param \DateTime $endDate
     */
    public function __construct($sessionCode, $sessionDescription, \DateTime $beginDate, \DateTime $endDate)
    {
      $this->sessionCode = $sessionCode;
      $this->sessionDescription = $sessionDescription;
      $this->beginDate = $beginDate->format(\DateTime::ATOM);
      $this->endDate = $endDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getSessionCode()
    {
      return $this->sessionCode;
    }

    /**
     * @param string $sessionCode
     * @return session
     */
    public function setSessionCode($sessionCode)
    {
      $this->sessionCode = $sessionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionDescription()
    {
      return $this->sessionDescription;
    }

    /**
     * @param string $sessionDescription
     * @return session
     */
    public function setSessionDescription($sessionDescription)
    {
      $this->sessionDescription = $sessionDescription;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBeginDate()
    {
      if ($this->beginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->beginDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $beginDate
     * @return session
     */
    public function setBeginDate(\DateTime $beginDate)
    {
      $this->beginDate = $beginDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->endDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endDate
     * @return session
     */
    public function setEndDate(\DateTime $endDate)
    {
      $this->endDate = $endDate->format(\DateTime::ATOM);
      return $this;
    }

}

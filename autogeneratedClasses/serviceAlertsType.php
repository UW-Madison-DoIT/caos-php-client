<?php

class serviceAlertsType
{

    /**
     * @var serviceAlertType $serviceAlert
     */
    protected $serviceAlert = null;

    /**
     * @param serviceAlertType $serviceAlert
     */
    public function __construct($serviceAlert)
    {
      $this->serviceAlert = $serviceAlert;
    }

    /**
     * @return serviceAlertType
     */
    public function getServiceAlert()
    {
      return $this->serviceAlert;
    }

    /**
     * @param serviceAlertType $serviceAlert
     * @return serviceAlertsType
     */
    public function setServiceAlert($serviceAlert)
    {
      $this->serviceAlert = $serviceAlert;
      return $this;
    }

}

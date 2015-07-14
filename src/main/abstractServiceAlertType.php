<?php

namespace edu\wisc\services\caos;

class abstractServiceAlertType
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
     * @return \edu\wisc\services\caos\abstractServiceAlertType
     */
    public function setServiceAlert($serviceAlert)
    {
      $this->serviceAlert = $serviceAlert;
      return $this;
    }

}

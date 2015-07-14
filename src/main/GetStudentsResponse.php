<?php

namespace edu\wisc\services\caos;

class GetStudentsResponse
{

    /**
     * @var serviceAlertsType $serviceAlerts
     */
    protected $serviceAlerts = null;

    /**
     * @var student $student
     */
    protected $student = null;

    /**
     * @param serviceAlertsType $serviceAlerts
     * @param student $student
     */
    public function __construct($serviceAlerts, $student)
    {
      $this->serviceAlerts = $serviceAlerts;
      $this->student = $student;
    }

    /**
     * @return serviceAlertsType
     */
    public function getServiceAlerts()
    {
      return $this->serviceAlerts;
    }

    /**
     * @param serviceAlertsType $serviceAlerts
     * @return \edu\wisc\services\caos\GetStudentsResponse
     */
    public function setServiceAlerts($serviceAlerts)
    {
      $this->serviceAlerts = $serviceAlerts;
      return $this;
    }

    /**
     * @return student
     */
    public function getStudent()
    {
      return $this->student;
    }

    /**
     * @param student $student
     * @return \edu\wisc\services\caos\GetStudentsResponse
     */
    public function setStudent($student)
    {
      $this->student = $student;
      return $this;
    }

}

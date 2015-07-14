<?php

namespace edu\wisc\services\caos;

class GetEnrollmentPackagesResponse
{

    /**
     * @var enrollmentPackage $enrollmentPackage
     */
    protected $enrollmentPackage = null;

    /**
     * @param enrollmentPackage $enrollmentPackage
     */
    public function __construct($enrollmentPackage)
    {
      $this->enrollmentPackage = $enrollmentPackage;
    }

    /**
     * @return enrollmentPackage
     */
    public function getEnrollmentPackage()
    {
      return $this->enrollmentPackage;
    }

    /**
     * @param enrollmentPackage $enrollmentPackage
     * @return \edu\wisc\services\caos\GetEnrollmentPackagesResponse
     */
    public function setEnrollmentPackage($enrollmentPackage)
    {
      $this->enrollmentPackage = $enrollmentPackage;
      return $this;
    }

}

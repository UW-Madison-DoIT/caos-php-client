<?php

class enrollmentPackage
{

    /**
     * @var enrollmentPackageUniqueId $enrollmentPackageUniqueId
     */
    protected $enrollmentPackageUniqueId = null;

    /**
     * @var int $enrollmentClassNumber
     */
    protected $enrollmentClassNumber = null;

    /**
     * @var string $creditRange
     */
    protected $creditRange = null;

    /**
     * @var enrollmentPackageClass $enrollmentPackageClass
     */
    protected $enrollmentPackageClass = null;

    /**
     * @param enrollmentPackageUniqueId $enrollmentPackageUniqueId
     * @param int $enrollmentClassNumber
     * @param string $creditRange
     * @param enrollmentPackageClass $enrollmentPackageClass
     */
    public function __construct($enrollmentPackageUniqueId, $enrollmentClassNumber, $creditRange, $enrollmentPackageClass)
    {
      $this->enrollmentPackageUniqueId = $enrollmentPackageUniqueId;
      $this->enrollmentClassNumber = $enrollmentClassNumber;
      $this->creditRange = $creditRange;
      $this->enrollmentPackageClass = $enrollmentPackageClass;
    }

    /**
     * @return enrollmentPackageUniqueId
     */
    public function getEnrollmentPackageUniqueId()
    {
      return $this->enrollmentPackageUniqueId;
    }

    /**
     * @param enrollmentPackageUniqueId $enrollmentPackageUniqueId
     * @return enrollmentPackage
     */
    public function setEnrollmentPackageUniqueId($enrollmentPackageUniqueId)
    {
      $this->enrollmentPackageUniqueId = $enrollmentPackageUniqueId;
      return $this;
    }

    /**
     * @return int
     */
    public function getEnrollmentClassNumber()
    {
      return $this->enrollmentClassNumber;
    }

    /**
     * @param int $enrollmentClassNumber
     * @return enrollmentPackage
     */
    public function setEnrollmentClassNumber($enrollmentClassNumber)
    {
      $this->enrollmentClassNumber = $enrollmentClassNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditRange()
    {
      return $this->creditRange;
    }

    /**
     * @param string $creditRange
     * @return enrollmentPackage
     */
    public function setCreditRange($creditRange)
    {
      $this->creditRange = $creditRange;
      return $this;
    }

    /**
     * @return enrollmentPackageClass
     */
    public function getEnrollmentPackageClass()
    {
      return $this->enrollmentPackageClass;
    }

    /**
     * @param enrollmentPackageClass $enrollmentPackageClass
     * @return enrollmentPackage
     */
    public function setEnrollmentPackageClass($enrollmentPackageClass)
    {
      $this->enrollmentPackageClass = $enrollmentPackageClass;
      return $this;
    }

}

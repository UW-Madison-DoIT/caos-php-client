<?php

namespace edu\wisc\services\caos;

class building
{

    /**
     * @var string $buildingCode
     */
    protected $buildingCode = null;

    /**
     * @var string $buildingName
     */
    protected $buildingName = null;

    /**
     * @var string $streetAddress
     */
    protected $streetAddress = null;

    /**
     * @var latitudeType $latitude
     */
    protected $latitude = null;

    /**
     * @var longitudeType $longitude
     */
    protected $longitude = null;

    /**
     * @param string $buildingCode
     * @param string $buildingName
     * @param string $streetAddress
     * @param latitudeType $latitude
     * @param longitudeType $longitude
     */
    public function __construct($buildingCode, $buildingName, $streetAddress, $latitude, $longitude)
    {
      $this->buildingCode = $buildingCode;
      $this->buildingName = $buildingName;
      $this->streetAddress = $streetAddress;
      $this->latitude = $latitude;
      $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getBuildingCode()
    {
      return $this->buildingCode;
    }

    /**
     * @param string $buildingCode
     * @return \edu\wisc\services\caos\building
     */
    public function setBuildingCode($buildingCode)
    {
      $this->buildingCode = $buildingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuildingName()
    {
      return $this->buildingName;
    }

    /**
     * @param string $buildingName
     * @return \edu\wisc\services\caos\building
     */
    public function setBuildingName($buildingName)
    {
      $this->buildingName = $buildingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress()
    {
      return $this->streetAddress;
    }

    /**
     * @param string $streetAddress
     * @return \edu\wisc\services\caos\building
     */
    public function setStreetAddress($streetAddress)
    {
      $this->streetAddress = $streetAddress;
      return $this;
    }

    /**
     * @return latitudeType
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param latitudeType $latitude
     * @return \edu\wisc\services\caos\building
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return longitudeType
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param longitudeType $longitude
     * @return \edu\wisc\services\caos\building
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

}

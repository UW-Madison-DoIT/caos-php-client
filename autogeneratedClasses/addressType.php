<?php

class addressType
{

    /**
     * @var string $streetAddress1
     */
    protected $streetAddress1 = null;

    /**
     * @var string $streetAddress2
     */
    protected $streetAddress2 = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var boolean $privacyFlag
     */
    protected $privacyFlag = null;

    /**
     * @param string $streetAddress1
     * @param string $streetAddress2
     * @param string $city
     * @param string $state
     * @param string $postalCode
     * @param string $country
     * @param boolean $privacyFlag
     */
    public function __construct($streetAddress1, $streetAddress2, $city, $state, $postalCode, $country, $privacyFlag)
    {
      $this->streetAddress1 = $streetAddress1;
      $this->streetAddress2 = $streetAddress2;
      $this->city = $city;
      $this->state = $state;
      $this->postalCode = $postalCode;
      $this->country = $country;
      $this->privacyFlag = $privacyFlag;
    }

    /**
     * @return string
     */
    public function getStreetAddress1()
    {
      return $this->streetAddress1;
    }

    /**
     * @param string $streetAddress1
     * @return addressType
     */
    public function setStreetAddress1($streetAddress1)
    {
      $this->streetAddress1 = $streetAddress1;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress2()
    {
      return $this->streetAddress2;
    }

    /**
     * @param string $streetAddress2
     * @return addressType
     */
    public function setStreetAddress2($streetAddress2)
    {
      $this->streetAddress2 = $streetAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return addressType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return addressType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return addressType
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return addressType
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrivacyFlag()
    {
      return $this->privacyFlag;
    }

    /**
     * @param boolean $privacyFlag
     * @return addressType
     */
    public function setPrivacyFlag($privacyFlag)
    {
      $this->privacyFlag = $privacyFlag;
      return $this;
    }

}

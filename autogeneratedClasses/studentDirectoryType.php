<?php

class studentDirectoryType
{

    /**
     * @var date $birthdate
     */
    protected $birthdate = null;

    /**
     * @var int $derivedAge
     */
    protected $derivedAge = null;

    /**
     * @var phoneType $preferredPhone
     */
    protected $preferredPhone = null;

    /**
     * @var addressType $homeAddress
     */
    protected $homeAddress = null;

    /**
     * @var addressType $localAddress
     */
    protected $localAddress = null;

    /**
     * @param date $birthdate
     * @param int $derivedAge
     * @param phoneType $preferredPhone
     * @param addressType $homeAddress
     * @param addressType $localAddress
     */
    public function __construct($birthdate, $derivedAge, $preferredPhone, $homeAddress, $localAddress)
    {
      $this->birthdate = $birthdate;
      $this->derivedAge = $derivedAge;
      $this->preferredPhone = $preferredPhone;
      $this->homeAddress = $homeAddress;
      $this->localAddress = $localAddress;
    }

    /**
     * @return date
     */
    public function getBirthdate()
    {
      return $this->birthdate;
    }

    /**
     * @param date $birthdate
     * @return studentDirectoryType
     */
    public function setBirthdate($birthdate)
    {
      $this->birthdate = $birthdate;
      return $this;
    }

    /**
     * @return int
     */
    public function getDerivedAge()
    {
      return $this->derivedAge;
    }

    /**
     * @param int $derivedAge
     * @return studentDirectoryType
     */
    public function setDerivedAge($derivedAge)
    {
      $this->derivedAge = $derivedAge;
      return $this;
    }

    /**
     * @return phoneType
     */
    public function getPreferredPhone()
    {
      return $this->preferredPhone;
    }

    /**
     * @param phoneType $preferredPhone
     * @return studentDirectoryType
     */
    public function setPreferredPhone($preferredPhone)
    {
      $this->preferredPhone = $preferredPhone;
      return $this;
    }

    /**
     * @return addressType
     */
    public function getHomeAddress()
    {
      return $this->homeAddress;
    }

    /**
     * @param addressType $homeAddress
     * @return studentDirectoryType
     */
    public function setHomeAddress($homeAddress)
    {
      $this->homeAddress = $homeAddress;
      return $this;
    }

    /**
     * @return addressType
     */
    public function getLocalAddress()
    {
      return $this->localAddress;
    }

    /**
     * @param addressType $localAddress
     * @return studentDirectoryType
     */
    public function setLocalAddress($localAddress)
    {
      $this->localAddress = $localAddress;
      return $this;
    }

}

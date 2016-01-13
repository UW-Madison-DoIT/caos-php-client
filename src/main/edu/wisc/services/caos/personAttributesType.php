<?php

namespace edu\wisc\services\caos;

class personAttributesType
{

    /**
     * @var string $emplid
     */
    protected $emplid = null;

    /**
     * @var string $pvi
     */
    protected $pvi = null;

    /**
     * @var nameType $name
     */
    protected $name = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var string $netid
     */
    protected $netid = null;

    /**
     * @param string $emplid
     * @param string $pvi
     * @param nameType $name
     * @param string $email
     * @param string $netid
     */
    public function __construct($emplid, $pvi, $name, $email, $netid)
    {
      $this->emplid = $emplid;
      $this->pvi = $pvi;
      $this->name = $name;
      $this->email = $email;
      $this->netid = $netid;
    }

    /**
     * @return string
     */
    public function getEmplid()
    {
      return $this->emplid;
    }

    /**
     * @param string $emplid
     * @return \edu\wisc\services\caos\personAttributesType
     */
    public function setEmplid($emplid)
    {
      $this->emplid = $emplid;
      return $this;
    }

    /**
     * @return string
     */
    public function getPvi()
    {
      return $this->pvi;
    }

    /**
     * @param string $pvi
     * @return \edu\wisc\services\caos\personAttributesType
     */
    public function setPvi($pvi)
    {
      $this->pvi = $pvi;
      return $this;
    }

    /**
     * @return nameType
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param nameType $name
     * @return \edu\wisc\services\caos\personAttributesType
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \edu\wisc\services\caos\personAttributesType
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetid()
    {
      return $this->netid;
    }

    /**
     * @param string $netid
     * @return \edu\wisc\services\caos\personAttributesType
     */
    public function setNetid($netid)
    {
      $this->netid = $netid;
      return $this;
    }

}

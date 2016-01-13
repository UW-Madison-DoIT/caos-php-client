<?php

namespace edu\wisc\services\caos;

class residencyType
{

    /**
     * @var boolean $wisconsinResident
     */
    protected $wisconsinResident = null;

    /**
     * @var boolean $minnesotaReciprocity
     */
    protected $minnesotaReciprocity = null;

    /**
     * @param boolean $wisconsinResident
     * @param boolean $minnesotaReciprocity
     */
    public function __construct($wisconsinResident, $minnesotaReciprocity)
    {
      $this->wisconsinResident = $wisconsinResident;
      $this->minnesotaReciprocity = $minnesotaReciprocity;
    }

    /**
     * @return boolean
     */
    public function getWisconsinResident()
    {
      return $this->wisconsinResident;
    }

    /**
     * @param boolean $wisconsinResident
     * @return \edu\wisc\services\caos\residencyType
     */
    public function setWisconsinResident($wisconsinResident)
    {
      $this->wisconsinResident = $wisconsinResident;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMinnesotaReciprocity()
    {
      return $this->minnesotaReciprocity;
    }

    /**
     * @param boolean $minnesotaReciprocity
     * @return \edu\wisc\services\caos\residencyType
     */
    public function setMinnesotaReciprocity($minnesotaReciprocity)
    {
      $this->minnesotaReciprocity = $minnesotaReciprocity;
      return $this;
    }

}

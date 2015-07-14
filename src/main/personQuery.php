<?php

namespace edu\wisc\services\caos;

class personQuery
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
     * @var string $netid
     */
    protected $netid = null;

    /**
     * @param string $emplid
     * @param string $pvi
     * @param string $netid
     */
    public function __construct($emplid, $pvi, $netid)
    {
      $this->emplid = $emplid;
      $this->pvi = $pvi;
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
     * @return \edu\wisc\services\caos\personQuery
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
     * @return \edu\wisc\services\caos\personQuery
     */
    public function setPvi($pvi)
    {
      $this->pvi = $pvi;
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
     * @return \edu\wisc\services\caos\personQuery
     */
    public function setNetid($netid)
    {
      $this->netid = $netid;
      return $this;
    }

}

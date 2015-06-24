<?php

class creditsType
{

    /**
     * @var creditTotalsType $creditTotals
     */
    protected $creditTotals = null;

    /**
     * @var transferCreditsType $transferCredits
     */
    protected $transferCredits = null;

    /**
     * @param creditTotalsType $creditTotals
     * @param transferCreditsType $transferCredits
     */
    public function __construct($creditTotals, $transferCredits)
    {
      $this->creditTotals = $creditTotals;
      $this->transferCredits = $transferCredits;
    }

    /**
     * @return creditTotalsType
     */
    public function getCreditTotals()
    {
      return $this->creditTotals;
    }

    /**
     * @param creditTotalsType $creditTotals
     * @return creditsType
     */
    public function setCreditTotals($creditTotals)
    {
      $this->creditTotals = $creditTotals;
      return $this;
    }

    /**
     * @return transferCreditsType
     */
    public function getTransferCredits()
    {
      return $this->transferCredits;
    }

    /**
     * @param transferCreditsType $transferCredits
     * @return creditsType
     */
    public function setTransferCredits($transferCredits)
    {
      $this->transferCredits = $transferCredits;
      return $this;
    }

}

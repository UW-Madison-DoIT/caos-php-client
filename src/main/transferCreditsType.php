<?php

namespace edu\wisc\services\caos;

class transferCreditsType
{

    /**
     * @var transferCreditType $transferCredit
     */
    protected $transferCredit = null;

    /**
     * @param transferCreditType $transferCredit
     */
    public function __construct($transferCredit)
    {
      $this->transferCredit = $transferCredit;
    }

    /**
     * @return transferCreditType
     */
    public function getTransferCredit()
    {
      return $this->transferCredit;
    }

    /**
     * @param transferCreditType $transferCredit
     * @return \edu\wisc\services\caos\transferCreditsType
     */
    public function setTransferCredit($transferCredit)
    {
      $this->transferCredit = $transferCredit;
      return $this;
    }

}

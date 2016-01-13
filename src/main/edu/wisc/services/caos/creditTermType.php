<?php

namespace edu\wisc\services\caos;

class creditTermType
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $total
     */
    protected $total = null;

    /**
     * @var int $taken
     */
    protected $taken = null;

    /**
     * @var int $gpa
     */
    protected $gpa = null;

    /**
     * @var int $nogpa
     */
    protected $nogpa = null;

    /**
     * @var int $grad
     */
    protected $grad = null;

    /**
     * @var int $inProgress
     */
    protected $inProgress = null;

    /**
     * @param termCodeType $termCode
     * @param string $description
     * @param int $total
     * @param int $taken
     * @param int $gpa
     * @param int $nogpa
     * @param int $grad
     * @param int $inProgress
     */
    public function __construct($termCode, $description, $total, $taken, $gpa, $nogpa, $grad, $inProgress)
    {
      $this->termCode = $termCode;
      $this->description = $description;
      $this->total = $total;
      $this->taken = $taken;
      $this->gpa = $gpa;
      $this->nogpa = $nogpa;
      $this->grad = $grad;
      $this->inProgress = $inProgress;
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return \edu\wisc\services\caos\creditTermType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \edu\wisc\services\caos\creditTermType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param int $total
     * @return \edu\wisc\services\caos\creditTermType
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return int
     */
    public function getTaken()
    {
      return $this->taken;
    }

    /**
     * @param int $taken
     * @return \edu\wisc\services\caos\creditTermType
     */
    public function setTaken($taken)
    {
      $this->taken = $taken;
      return $this;
    }

    /**
     * @return int
     */
    public function getGpa()
    {
      return $this->gpa;
    }

    /**
     * @param int $gpa
     * @return \edu\wisc\services\caos\creditTermType
     */
    public function setGpa($gpa)
    {
      $this->gpa = $gpa;
      return $this;
    }

    /**
     * @return int
     */
    public function getNogpa()
    {
      return $this->nogpa;
    }

    /**
     * @param int $nogpa
     * @return \edu\wisc\services\caos\creditTermType
     */
    public function setNogpa($nogpa)
    {
      $this->nogpa = $nogpa;
      return $this;
    }

    /**
     * @return int
     */
    public function getGrad()
    {
      return $this->grad;
    }

    /**
     * @param int $grad
     * @return \edu\wisc\services\caos\creditTermType
     */
    public function setGrad($grad)
    {
      $this->grad = $grad;
      return $this;
    }

    /**
     * @return int
     */
    public function getInProgress()
    {
      return $this->inProgress;
    }

    /**
     * @param int $inProgress
     * @return \edu\wisc\services\caos\creditTermType
     */
    public function setInProgress($inProgress)
    {
      $this->inProgress = $inProgress;
      return $this;
    }

}

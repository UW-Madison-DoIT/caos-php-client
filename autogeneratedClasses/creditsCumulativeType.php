<?php

class creditsCumulativeType
{

    /**
     * @var int $total
     */
    protected $total = null;

    /**
     * @var int $gpa
     */
    protected $gpa = null;

    /**
     * @var int $transfer
     */
    protected $transfer = null;

    /**
     * @var int $test
     */
    protected $test = null;

    /**
     * @var int $other
     */
    protected $other = null;

    /**
     * @var levelType $currentClassStanding
     */
    protected $currentClassStanding = null;

    /**
     * @var levelType $projectedClassStanding
     */
    protected $projectedClassStanding = null;

    /**
     * @var int $numberOfTermsEnrolled
     */
    protected $numberOfTermsEnrolled = null;

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @param int $total
     * @param int $gpa
     * @param int $transfer
     * @param int $test
     * @param int $other
     * @param levelType $currentClassStanding
     * @param levelType $projectedClassStanding
     * @param int $numberOfTermsEnrolled
     * @param termCodeType $termCode
     */
    public function __construct($total, $gpa, $transfer, $test, $other, $currentClassStanding, $projectedClassStanding, $numberOfTermsEnrolled, $termCode)
    {
      $this->total = $total;
      $this->gpa = $gpa;
      $this->transfer = $transfer;
      $this->test = $test;
      $this->other = $other;
      $this->currentClassStanding = $currentClassStanding;
      $this->projectedClassStanding = $projectedClassStanding;
      $this->numberOfTermsEnrolled = $numberOfTermsEnrolled;
      $this->termCode = $termCode;
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
     * @return creditsCumulativeType
     */
    public function setTotal($total)
    {
      $this->total = $total;
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
     * @return creditsCumulativeType
     */
    public function setGpa($gpa)
    {
      $this->gpa = $gpa;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransfer()
    {
      return $this->transfer;
    }

    /**
     * @param int $transfer
     * @return creditsCumulativeType
     */
    public function setTransfer($transfer)
    {
      $this->transfer = $transfer;
      return $this;
    }

    /**
     * @return int
     */
    public function getTest()
    {
      return $this->test;
    }

    /**
     * @param int $test
     * @return creditsCumulativeType
     */
    public function setTest($test)
    {
      $this->test = $test;
      return $this;
    }

    /**
     * @return int
     */
    public function getOther()
    {
      return $this->other;
    }

    /**
     * @param int $other
     * @return creditsCumulativeType
     */
    public function setOther($other)
    {
      $this->other = $other;
      return $this;
    }

    /**
     * @return levelType
     */
    public function getCurrentClassStanding()
    {
      return $this->currentClassStanding;
    }

    /**
     * @param levelType $currentClassStanding
     * @return creditsCumulativeType
     */
    public function setCurrentClassStanding($currentClassStanding)
    {
      $this->currentClassStanding = $currentClassStanding;
      return $this;
    }

    /**
     * @return levelType
     */
    public function getProjectedClassStanding()
    {
      return $this->projectedClassStanding;
    }

    /**
     * @param levelType $projectedClassStanding
     * @return creditsCumulativeType
     */
    public function setProjectedClassStanding($projectedClassStanding)
    {
      $this->projectedClassStanding = $projectedClassStanding;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfTermsEnrolled()
    {
      return $this->numberOfTermsEnrolled;
    }

    /**
     * @param int $numberOfTermsEnrolled
     * @return creditsCumulativeType
     */
    public function setNumberOfTermsEnrolled($numberOfTermsEnrolled)
    {
      $this->numberOfTermsEnrolled = $numberOfTermsEnrolled;
      return $this;
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
     * @return creditsCumulativeType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

}

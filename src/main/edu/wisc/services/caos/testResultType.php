<?php

namespace edu\wisc\services\caos;

class testResultType
{

    /**
     * @var date $testDate
     */
    protected $testDate = null;

    /**
     * @var float $score
     */
    protected $score = null;

    /**
     * @var string $coursePlacementDecision
     */
    protected $coursePlacementDecision = null;

    /**
     * @param date $testDate
     * @param float $score
     * @param string $coursePlacementDecision
     */
    public function __construct($testDate, $score, $coursePlacementDecision)
    {
      $this->testDate = $testDate;
      $this->score = $score;
      $this->coursePlacementDecision = $coursePlacementDecision;
    }

    /**
     * @return date
     */
    public function getTestDate()
    {
      return $this->testDate;
    }

    /**
     * @param date $testDate
     * @return \edu\wisc\services\caos\testResultType
     */
    public function setTestDate($testDate)
    {
      $this->testDate = $testDate;
      return $this;
    }

    /**
     * @return float
     */
    public function getScore()
    {
      return $this->score;
    }

    /**
     * @param float $score
     * @return \edu\wisc\services\caos\testResultType
     */
    public function setScore($score)
    {
      $this->score = $score;
      return $this;
    }

    /**
     * @return string
     */
    public function getCoursePlacementDecision()
    {
      return $this->coursePlacementDecision;
    }

    /**
     * @param string $coursePlacementDecision
     * @return \edu\wisc\services\caos\testResultType
     */
    public function setCoursePlacementDecision($coursePlacementDecision)
    {
      $this->coursePlacementDecision = $coursePlacementDecision;
      return $this;
    }

}

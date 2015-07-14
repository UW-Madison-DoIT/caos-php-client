<?php

namespace edu\wisc\services\caos;

class enrollmentStatus
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @var int $capacity
     */
    protected $capacity = null;

    /**
     * @var int $currentlyEnrolled
     */
    protected $currentlyEnrolled = null;

    /**
     * @var int $waitlistCapacity
     */
    protected $waitlistCapacity = null;

    /**
     * @var int $waitlistCurrentSize
     */
    protected $waitlistCurrentSize = null;

    /**
     * @var int $openSeats
     */
    protected $openSeats = null;

    /**
     * @var int $openWaitlistSpots
     */
    protected $openWaitlistSpots = null;

    /**
     * @var int $aggregateCapacity
     */
    protected $aggregateCapacity = null;

    /**
     * @var int $aggregateCurrentlyEnrolled
     */
    protected $aggregateCurrentlyEnrolled = null;

    /**
     * @var int $aggregateWaitlistCapacity
     */
    protected $aggregateWaitlistCapacity = null;

    /**
     * @var int $aggregateWaitlistCurrentSize
     */
    protected $aggregateWaitlistCurrentSize = null;

    /**
     * @param classUniqueId $classUniqueId
     * @param int $capacity
     * @param int $currentlyEnrolled
     * @param int $waitlistCapacity
     * @param int $waitlistCurrentSize
     * @param int $openSeats
     * @param int $openWaitlistSpots
     * @param int $aggregateCapacity
     * @param int $aggregateCurrentlyEnrolled
     * @param int $aggregateWaitlistCapacity
     * @param int $aggregateWaitlistCurrentSize
     */
    public function __construct($classUniqueId, $capacity, $currentlyEnrolled, $waitlistCapacity, $waitlistCurrentSize, $openSeats, $openWaitlistSpots, $aggregateCapacity, $aggregateCurrentlyEnrolled, $aggregateWaitlistCapacity, $aggregateWaitlistCurrentSize)
    {
      $this->classUniqueId = $classUniqueId;
      $this->capacity = $capacity;
      $this->currentlyEnrolled = $currentlyEnrolled;
      $this->waitlistCapacity = $waitlistCapacity;
      $this->waitlistCurrentSize = $waitlistCurrentSize;
      $this->openSeats = $openSeats;
      $this->openWaitlistSpots = $openWaitlistSpots;
      $this->aggregateCapacity = $aggregateCapacity;
      $this->aggregateCurrentlyEnrolled = $aggregateCurrentlyEnrolled;
      $this->aggregateWaitlistCapacity = $aggregateWaitlistCapacity;
      $this->aggregateWaitlistCurrentSize = $aggregateWaitlistCurrentSize;
    }

    /**
     * @return classUniqueId
     */
    public function getClassUniqueId()
    {
      return $this->classUniqueId;
    }

    /**
     * @param classUniqueId $classUniqueId
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCapacity()
    {
      return $this->capacity;
    }

    /**
     * @param int $capacity
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setCapacity($capacity)
    {
      $this->capacity = $capacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrentlyEnrolled()
    {
      return $this->currentlyEnrolled;
    }

    /**
     * @param int $currentlyEnrolled
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setCurrentlyEnrolled($currentlyEnrolled)
    {
      $this->currentlyEnrolled = $currentlyEnrolled;
      return $this;
    }

    /**
     * @return int
     */
    public function getWaitlistCapacity()
    {
      return $this->waitlistCapacity;
    }

    /**
     * @param int $waitlistCapacity
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setWaitlistCapacity($waitlistCapacity)
    {
      $this->waitlistCapacity = $waitlistCapacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getWaitlistCurrentSize()
    {
      return $this->waitlistCurrentSize;
    }

    /**
     * @param int $waitlistCurrentSize
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setWaitlistCurrentSize($waitlistCurrentSize)
    {
      $this->waitlistCurrentSize = $waitlistCurrentSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getOpenSeats()
    {
      return $this->openSeats;
    }

    /**
     * @param int $openSeats
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setOpenSeats($openSeats)
    {
      $this->openSeats = $openSeats;
      return $this;
    }

    /**
     * @return int
     */
    public function getOpenWaitlistSpots()
    {
      return $this->openWaitlistSpots;
    }

    /**
     * @param int $openWaitlistSpots
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setOpenWaitlistSpots($openWaitlistSpots)
    {
      $this->openWaitlistSpots = $openWaitlistSpots;
      return $this;
    }

    /**
     * @return int
     */
    public function getAggregateCapacity()
    {
      return $this->aggregateCapacity;
    }

    /**
     * @param int $aggregateCapacity
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setAggregateCapacity($aggregateCapacity)
    {
      $this->aggregateCapacity = $aggregateCapacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getAggregateCurrentlyEnrolled()
    {
      return $this->aggregateCurrentlyEnrolled;
    }

    /**
     * @param int $aggregateCurrentlyEnrolled
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setAggregateCurrentlyEnrolled($aggregateCurrentlyEnrolled)
    {
      $this->aggregateCurrentlyEnrolled = $aggregateCurrentlyEnrolled;
      return $this;
    }

    /**
     * @return int
     */
    public function getAggregateWaitlistCapacity()
    {
      return $this->aggregateWaitlistCapacity;
    }

    /**
     * @param int $aggregateWaitlistCapacity
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setAggregateWaitlistCapacity($aggregateWaitlistCapacity)
    {
      $this->aggregateWaitlistCapacity = $aggregateWaitlistCapacity;
      return $this;
    }

    /**
     * @return int
     */
    public function getAggregateWaitlistCurrentSize()
    {
      return $this->aggregateWaitlistCurrentSize;
    }

    /**
     * @param int $aggregateWaitlistCurrentSize
     * @return \edu\wisc\services\caos\enrollmentStatus
     */
    public function setAggregateWaitlistCurrentSize($aggregateWaitlistCurrentSize)
    {
      $this->aggregateWaitlistCurrentSize = $aggregateWaitlistCurrentSize;
      return $this;
    }

}

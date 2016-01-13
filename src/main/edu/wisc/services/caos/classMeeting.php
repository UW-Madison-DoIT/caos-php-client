<?php

namespace edu\wisc\services\caos;

class classMeeting
{

    /**
     * @var string $meetingOrExamNumber
     */
    protected $meetingOrExamNumber = null;

    /**
     * @var classMeetingType $meetingType
     */
    protected $meetingType = null;

    /**
     * @var time $meetingTimeStart
     */
    protected $meetingTimeStart = null;

    /**
     * @var time $meetingTimeEnd
     */
    protected $meetingTimeEnd = null;

    /**
     * @var string $meetingDays
     */
    protected $meetingDays = null;

    /**
     * @var building $building
     */
    protected $building = null;

    /**
     * @var string $room
     */
    protected $room = null;

    /**
     * @var date $examDate
     */
    protected $examDate = null;

    /**
     * @param string $meetingOrExamNumber
     * @param classMeetingType $meetingType
     * @param time $meetingTimeStart
     * @param time $meetingTimeEnd
     * @param string $meetingDays
     * @param building $building
     * @param string $room
     * @param date $examDate
     */
    public function __construct($meetingOrExamNumber, $meetingType, $meetingTimeStart, $meetingTimeEnd, $meetingDays, $building, $room, $examDate)
    {
      $this->meetingOrExamNumber = $meetingOrExamNumber;
      $this->meetingType = $meetingType;
      $this->meetingTimeStart = $meetingTimeStart;
      $this->meetingTimeEnd = $meetingTimeEnd;
      $this->meetingDays = $meetingDays;
      $this->building = $building;
      $this->room = $room;
      $this->examDate = $examDate;
    }

    /**
     * @return string
     */
    public function getMeetingOrExamNumber()
    {
      return $this->meetingOrExamNumber;
    }

    /**
     * @param string $meetingOrExamNumber
     * @return \edu\wisc\services\caos\classMeeting
     */
    public function setMeetingOrExamNumber($meetingOrExamNumber)
    {
      $this->meetingOrExamNumber = $meetingOrExamNumber;
      return $this;
    }

    /**
     * @return classMeetingType
     */
    public function getMeetingType()
    {
      return $this->meetingType;
    }

    /**
     * @param classMeetingType $meetingType
     * @return \edu\wisc\services\caos\classMeeting
     */
    public function setMeetingType($meetingType)
    {
      $this->meetingType = $meetingType;
      return $this;
    }

    /**
     * @return time
     */
    public function getMeetingTimeStart()
    {
      return $this->meetingTimeStart;
    }

    /**
     * @param time $meetingTimeStart
     * @return \edu\wisc\services\caos\classMeeting
     */
    public function setMeetingTimeStart($meetingTimeStart)
    {
      $this->meetingTimeStart = $meetingTimeStart;
      return $this;
    }

    /**
     * @return time
     */
    public function getMeetingTimeEnd()
    {
      return $this->meetingTimeEnd;
    }

    /**
     * @param time $meetingTimeEnd
     * @return \edu\wisc\services\caos\classMeeting
     */
    public function setMeetingTimeEnd($meetingTimeEnd)
    {
      $this->meetingTimeEnd = $meetingTimeEnd;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeetingDays()
    {
      return $this->meetingDays;
    }

    /**
     * @param string $meetingDays
     * @return \edu\wisc\services\caos\classMeeting
     */
    public function setMeetingDays($meetingDays)
    {
      $this->meetingDays = $meetingDays;
      return $this;
    }

    /**
     * @return building
     */
    public function getBuilding()
    {
      return $this->building;
    }

    /**
     * @param building $building
     * @return \edu\wisc\services\caos\classMeeting
     */
    public function setBuilding($building)
    {
      $this->building = $building;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoom()
    {
      return $this->room;
    }

    /**
     * @param string $room
     * @return \edu\wisc\services\caos\classMeeting
     */
    public function setRoom($room)
    {
      $this->room = $room;
      return $this;
    }

    /**
     * @return date
     */
    public function getExamDate()
    {
      return $this->examDate;
    }

    /**
     * @param date $examDate
     * @return \edu\wisc\services\caos\classMeeting
     */
    public function setExamDate($examDate)
    {
      $this->examDate = $examDate;
      return $this;
    }

}

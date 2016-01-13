<?php

namespace edu\wisc\services\caos;

class GetClassesMeetingWithinBuildingRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $buildingCode
     */
    protected $buildingCode = null;

    /**
     * @var string $meetingRoom
     */
    protected $meetingRoom = null;

    /**
     * @var dayOfWeek $dayOfWeek
     */
    protected $dayOfWeek = null;

    /**
     * @param termCodeType $termCode
     * @param string $buildingCode
     * @param string $meetingRoom
     * @param dayOfWeek $dayOfWeek
     */
    public function __construct($termCode, $buildingCode, $meetingRoom, $dayOfWeek)
    {
      $this->termCode = $termCode;
      $this->buildingCode = $buildingCode;
      $this->meetingRoom = $meetingRoom;
      $this->dayOfWeek = $dayOfWeek;
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
     * @return \edu\wisc\services\caos\GetClassesMeetingWithinBuildingRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuildingCode()
    {
      return $this->buildingCode;
    }

    /**
     * @param string $buildingCode
     * @return \edu\wisc\services\caos\GetClassesMeetingWithinBuildingRequest
     */
    public function setBuildingCode($buildingCode)
    {
      $this->buildingCode = $buildingCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMeetingRoom()
    {
      return $this->meetingRoom;
    }

    /**
     * @param string $meetingRoom
     * @return \edu\wisc\services\caos\GetClassesMeetingWithinBuildingRequest
     */
    public function setMeetingRoom($meetingRoom)
    {
      $this->meetingRoom = $meetingRoom;
      return $this;
    }

    /**
     * @return dayOfWeek
     */
    public function getDayOfWeek()
    {
      return $this->dayOfWeek;
    }

    /**
     * @param dayOfWeek $dayOfWeek
     * @return \edu\wisc\services\caos\GetClassesMeetingWithinBuildingRequest
     */
    public function setDayOfWeek($dayOfWeek)
    {
      $this->dayOfWeek = $dayOfWeek;
      return $this;
    }

}

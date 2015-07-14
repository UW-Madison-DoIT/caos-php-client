<?php

namespace edu\wisc\services\caos;

class GetClassMeetingsResponse
{

    /**
     * @var classMeeting $classMeeting
     */
    protected $classMeeting = null;

    /**
     * @param classMeeting $classMeeting
     */
    public function __construct($classMeeting)
    {
      $this->classMeeting = $classMeeting;
    }

    /**
     * @return classMeeting
     */
    public function getClassMeeting()
    {
      return $this->classMeeting;
    }

    /**
     * @param classMeeting $classMeeting
     * @return \edu\wisc\services\caos\GetClassMeetingsResponse
     */
    public function setClassMeeting($classMeeting)
    {
      $this->classMeeting = $classMeeting;
      return $this;
    }

}

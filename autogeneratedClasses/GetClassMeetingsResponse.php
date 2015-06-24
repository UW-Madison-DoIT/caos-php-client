<?php

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
     * @return GetClassMeetingsResponse
     */
    public function setClassMeeting($classMeeting)
    {
      $this->classMeeting = $classMeeting;
      return $this;
    }

}

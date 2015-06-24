<?php

class entryEventsType
{

    /**
     * @var entryEventType $entryEvent
     */
    protected $entryEvent = null;

    /**
     * @param entryEventType $entryEvent
     */
    public function __construct($entryEvent)
    {
      $this->entryEvent = $entryEvent;
    }

    /**
     * @return entryEventType
     */
    public function getEntryEvent()
    {
      return $this->entryEvent;
    }

    /**
     * @param entryEventType $entryEvent
     * @return entryEventsType
     */
    public function setEntryEvent($entryEvent)
    {
      $this->entryEvent = $entryEvent;
      return $this;
    }

}

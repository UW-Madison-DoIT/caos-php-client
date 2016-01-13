<?php

namespace edu\wisc\services\caos;

class careerType extends codeDescriptionPairType
{

    /**
     * @var entryEventsType $entryEvents
     */
    protected $entryEvents = null;

    /**
     * @param string $code
     * @param string $description
     * @param entryEventsType $entryEvents
     */
    public function __construct($code, $description, $entryEvents)
    {
      parent::__construct($code, $description);
      $this->entryEvents = $entryEvents;
    }

    /**
     * @return entryEventsType
     */
    public function getEntryEvents()
    {
      return $this->entryEvents;
    }

    /**
     * @param entryEventsType $entryEvents
     * @return \edu\wisc\services\caos\careerType
     */
    public function setEntryEvents($entryEvents)
    {
      $this->entryEvents = $entryEvents;
      return $this;
    }

}

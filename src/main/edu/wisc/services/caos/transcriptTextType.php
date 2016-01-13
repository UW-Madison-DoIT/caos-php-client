<?php

namespace edu\wisc\services\caos;

class transcriptTextType
{

    /**
     * @var string[] $entry
     */
    protected $entry = null;

    /**
     * @param string[] $entry
     */
    public function __construct(array $entry)
    {
      $this->entry = $entry;
    }

    /**
     * @return string[]
     */
    public function getEntry()
    {
      return $this->entry;
    }

    /**
     * @param string[] $entry
     * @return \edu\wisc\services\caos\transcriptTextType
     */
    public function setEntry(array $entry)
    {
      $this->entry = $entry;
      return $this;
    }

}

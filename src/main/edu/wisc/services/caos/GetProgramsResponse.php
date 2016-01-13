<?php

namespace edu\wisc\services\caos;

class GetProgramsResponse
{

    /**
     * @var programsType $programs
     */
    protected $programs = null;

    /**
     * @param programsType $programs
     */
    public function __construct($programs)
    {
      $this->programs = $programs;
    }

    /**
     * @return programsType
     */
    public function getPrograms()
    {
      return $this->programs;
    }

    /**
     * @param programsType $programs
     * @return \edu\wisc\services\caos\GetProgramsResponse
     */
    public function setPrograms($programs)
    {
      $this->programs = $programs;
      return $this;
    }

}

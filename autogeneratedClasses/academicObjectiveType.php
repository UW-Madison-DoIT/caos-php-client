<?php

class academicObjectiveType
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
     * @return academicObjectiveType
     */
    public function setPrograms($programs)
    {
      $this->programs = $programs;
      return $this;
    }

}

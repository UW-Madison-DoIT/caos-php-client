<?php

class programsType
{

    /**
     * @var programType[] $program
     */
    protected $program = null;

    /**
     * @param programType[] $program
     */
    public function __construct(array $program)
    {
      $this->program = $program;
    }

    /**
     * @return programType[]
     */
    public function getProgram()
    {
      return $this->program;
    }

    /**
     * @param programType[] $program
     * @return programsType
     */
    public function setProgram(array $program)
    {
      $this->program = $program;
      return $this;
    }

}

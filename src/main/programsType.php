<?php

namespace edu\wisc\services\caos;

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
     * @return \edu\wisc\services\caos\programsType
     */
    public function setProgram(array $program)
    {
      $this->program = $program;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class GetUniqueClassInstructionModesInTermResponse
{

    /**
     * @var string $instructionMode
     */
    protected $instructionMode = null;

    /**
     * @param string $instructionMode
     */
    public function __construct($instructionMode)
    {
      $this->instructionMode = $instructionMode;
    }

    /**
     * @return string
     */
    public function getInstructionMode()
    {
      return $this->instructionMode;
    }

    /**
     * @param string $instructionMode
     * @return \edu\wisc\services\caos\GetUniqueClassInstructionModesInTermResponse
     */
    public function setInstructionMode($instructionMode)
    {
      $this->instructionMode = $instructionMode;
      return $this;
    }

}

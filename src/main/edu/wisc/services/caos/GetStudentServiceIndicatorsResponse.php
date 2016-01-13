<?php

namespace edu\wisc\services\caos;

class GetStudentServiceIndicatorsResponse
{

    /**
     * @var studentServiceIndicator $studentServiceIndicator
     */
    protected $studentServiceIndicator = null;

    /**
     * @param studentServiceIndicator $studentServiceIndicator
     */
    public function __construct($studentServiceIndicator)
    {
      $this->studentServiceIndicator = $studentServiceIndicator;
    }

    /**
     * @return studentServiceIndicator
     */
    public function getStudentServiceIndicator()
    {
      return $this->studentServiceIndicator;
    }

    /**
     * @param studentServiceIndicator $studentServiceIndicator
     * @return \edu\wisc\services\caos\GetStudentServiceIndicatorsResponse
     */
    public function setStudentServiceIndicator($studentServiceIndicator)
    {
      $this->studentServiceIndicator = $studentServiceIndicator;
      return $this;
    }

}

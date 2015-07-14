<?php

namespace edu\wisc\services\caos;

class GetAcademicStandingActionsRequest
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      $this->any = $any;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \edu\wisc\services\caos\GetAcademicStandingActionsRequest
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}

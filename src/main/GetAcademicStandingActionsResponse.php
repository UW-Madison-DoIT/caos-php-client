<?php

namespace edu\wisc\services\caos;

class GetAcademicStandingActionsResponse
{

    /**
     * @var academicStandingActionType $academicStandingAction
     */
    protected $academicStandingAction = null;

    /**
     * @param academicStandingActionType $academicStandingAction
     */
    public function __construct($academicStandingAction)
    {
      $this->academicStandingAction = $academicStandingAction;
    }

    /**
     * @return academicStandingActionType
     */
    public function getAcademicStandingAction()
    {
      return $this->academicStandingAction;
    }

    /**
     * @param academicStandingActionType $academicStandingAction
     * @return \edu\wisc\services\caos\GetAcademicStandingActionsResponse
     */
    public function setAcademicStandingAction($academicStandingAction)
    {
      $this->academicStandingAction = $academicStandingAction;
      return $this;
    }

}

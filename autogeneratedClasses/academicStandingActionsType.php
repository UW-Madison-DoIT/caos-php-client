<?php

class academicStandingActionsType
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
     * @return academicStandingActionsType
     */
    public function setAcademicStandingAction($academicStandingAction)
    {
      $this->academicStandingAction = $academicStandingAction;
      return $this;
    }

}

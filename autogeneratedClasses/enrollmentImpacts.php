<?php

class enrollmentImpacts
{

    /**
     * @var holdsType $holds
     */
    protected $holds = null;

    /**
     * @var registrationAppointmentType $registrationAppointment
     */
    protected $registrationAppointment = null;

    /**
     * @var deansExceptions $deansExceptions
     */
    protected $deansExceptions = null;

    /**
     * @param holdsType $holds
     * @param registrationAppointmentType $registrationAppointment
     * @param deansExceptions $deansExceptions
     */
    public function __construct($holds, $registrationAppointment, $deansExceptions)
    {
      $this->holds = $holds;
      $this->registrationAppointment = $registrationAppointment;
      $this->deansExceptions = $deansExceptions;
    }

    /**
     * @return holdsType
     */
    public function getHolds()
    {
      return $this->holds;
    }

    /**
     * @param holdsType $holds
     * @return enrollmentImpacts
     */
    public function setHolds($holds)
    {
      $this->holds = $holds;
      return $this;
    }

    /**
     * @return registrationAppointmentType
     */
    public function getRegistrationAppointment()
    {
      return $this->registrationAppointment;
    }

    /**
     * @param registrationAppointmentType $registrationAppointment
     * @return enrollmentImpacts
     */
    public function setRegistrationAppointment($registrationAppointment)
    {
      $this->registrationAppointment = $registrationAppointment;
      return $this;
    }

    /**
     * @return deansExceptions
     */
    public function getDeansExceptions()
    {
      return $this->deansExceptions;
    }

    /**
     * @param deansExceptions $deansExceptions
     * @return enrollmentImpacts
     */
    public function setDeansExceptions($deansExceptions)
    {
      $this->deansExceptions = $deansExceptions;
      return $this;
    }

}

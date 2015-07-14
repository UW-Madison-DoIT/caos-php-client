<?php

namespace edu\wisc\services\caos;

class registrationAppointmentType
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $termDescription
     */
    protected $termDescription = null;

    /**
     * @var \DateTime $registrationDateTime
     */
    protected $registrationDateTime = null;

    /**
     * @param termCodeType $termCode
     * @param string $termDescription
     * @param \DateTime $registrationDateTime
     */
    public function __construct($termCode, $termDescription, \DateTime $registrationDateTime)
    {
      $this->termCode = $termCode;
      $this->termDescription = $termDescription;
      $this->registrationDateTime = $registrationDateTime->format(\DateTime::ATOM);
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return \edu\wisc\services\caos\registrationAppointmentType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermDescription()
    {
      return $this->termDescription;
    }

    /**
     * @param string $termDescription
     * @return \edu\wisc\services\caos\registrationAppointmentType
     */
    public function setTermDescription($termDescription)
    {
      $this->termDescription = $termDescription;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRegistrationDateTime()
    {
      if ($this->registrationDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->registrationDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $registrationDateTime
     * @return \edu\wisc\services\caos\registrationAppointmentType
     */
    public function setRegistrationDateTime(\DateTime $registrationDateTime)
    {
      $this->registrationDateTime = $registrationDateTime->format(\DateTime::ATOM);
      return $this;
    }

}

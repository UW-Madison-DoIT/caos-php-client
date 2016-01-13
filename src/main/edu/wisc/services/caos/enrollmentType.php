<?php

namespace edu\wisc\services\caos;

class enrollmentType
{

    /**
     * @var string $highSchoolAttended
     */
    protected $highSchoolAttended = null;

    /**
     * @param string $highSchoolAttended
     */
    public function __construct($highSchoolAttended)
    {
      $this->highSchoolAttended = $highSchoolAttended;
    }

    /**
     * @return string
     */
    public function getHighSchoolAttended()
    {
      return $this->highSchoolAttended;
    }

    /**
     * @param string $highSchoolAttended
     * @return \edu\wisc\services\caos\enrollmentType
     */
    public function setHighSchoolAttended($highSchoolAttended)
    {
      $this->highSchoolAttended = $highSchoolAttended;
      return $this;
    }

}

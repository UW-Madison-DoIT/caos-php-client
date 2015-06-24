<?php

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
     * @return enrollmentType
     */
    public function setHighSchoolAttended($highSchoolAttended)
    {
      $this->highSchoolAttended = $highSchoolAttended;
      return $this;
    }

}

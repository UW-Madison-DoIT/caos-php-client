<?php

class GetAllSchoolCollegesResponse
{

    /**
     * @var schoolCollege $schoolCollege
     */
    protected $schoolCollege = null;

    /**
     * @param schoolCollege $schoolCollege
     */
    public function __construct($schoolCollege)
    {
      $this->schoolCollege = $schoolCollege;
    }

    /**
     * @return schoolCollege
     */
    public function getSchoolCollege()
    {
      return $this->schoolCollege;
    }

    /**
     * @param schoolCollege $schoolCollege
     * @return GetAllSchoolCollegesResponse
     */
    public function setSchoolCollege($schoolCollege)
    {
      $this->schoolCollege = $schoolCollege;
      return $this;
    }

}

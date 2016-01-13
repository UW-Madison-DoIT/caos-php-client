<?php

namespace edu\wisc\services\caos;

class secondarySchoolType
{

    /**
     * @var string $highSchoolAttended
     */
    protected $highSchoolAttended = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $state
     */
    protected $state = null;

    /**
     * @var boolean $isLastSchoolAttended
     */
    protected $isLastSchoolAttended = null;

    /**
     * @var subjectAreasType $subjectAreas
     */
    protected $subjectAreas = null;

    /**
     * @param string $highSchoolAttended
     * @param string $city
     * @param string $state
     * @param boolean $isLastSchoolAttended
     * @param subjectAreasType $subjectAreas
     */
    public function __construct($highSchoolAttended, $city, $state, $isLastSchoolAttended, $subjectAreas)
    {
      $this->highSchoolAttended = $highSchoolAttended;
      $this->city = $city;
      $this->state = $state;
      $this->isLastSchoolAttended = $isLastSchoolAttended;
      $this->subjectAreas = $subjectAreas;
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
     * @return \edu\wisc\services\caos\secondarySchoolType
     */
    public function setHighSchoolAttended($highSchoolAttended)
    {
      $this->highSchoolAttended = $highSchoolAttended;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \edu\wisc\services\caos\secondarySchoolType
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->state;
    }

    /**
     * @param string $state
     * @return \edu\wisc\services\caos\secondarySchoolType
     */
    public function setState($state)
    {
      $this->state = $state;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLastSchoolAttended()
    {
      return $this->isLastSchoolAttended;
    }

    /**
     * @param boolean $isLastSchoolAttended
     * @return \edu\wisc\services\caos\secondarySchoolType
     */
    public function setIsLastSchoolAttended($isLastSchoolAttended)
    {
      $this->isLastSchoolAttended = $isLastSchoolAttended;
      return $this;
    }

    /**
     * @return subjectAreasType
     */
    public function getSubjectAreas()
    {
      return $this->subjectAreas;
    }

    /**
     * @param subjectAreasType $subjectAreas
     * @return \edu\wisc\services\caos\secondarySchoolType
     */
    public function setSubjectAreas($subjectAreas)
    {
      $this->subjectAreas = $subjectAreas;
      return $this;
    }

}

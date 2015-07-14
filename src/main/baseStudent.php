<?php

namespace edu\wisc\services\caos;

class baseStudent extends personType
{

    /**
     * @var ferpaAttributes $ferpaAttributes
     */
    protected $ferpaAttributes = null;

    /**
     * @var primaryCareerType $primaryCareer
     */
    protected $primaryCareer = null;

    /**
     * @var string $campusId
     */
    protected $campusId = null;

    /**
     * @var gender $gender
     */
    protected $gender = null;

    /**
     * @param personAttributesType $personAttributes
     * @param ferpaAttributes $ferpaAttributes
     * @param primaryCareerType $primaryCareer
     * @param string $campusId
     * @param gender $gender
     */
    public function __construct($personAttributes, $ferpaAttributes, $primaryCareer, $campusId, $gender)
    {
      parent::__construct($personAttributes);
      $this->ferpaAttributes = $ferpaAttributes;
      $this->primaryCareer = $primaryCareer;
      $this->campusId = $campusId;
      $this->gender = $gender;
    }

    /**
     * @return ferpaAttributes
     */
    public function getFerpaAttributes()
    {
      return $this->ferpaAttributes;
    }

    /**
     * @param ferpaAttributes $ferpaAttributes
     * @return \edu\wisc\services\caos\baseStudent
     */
    public function setFerpaAttributes($ferpaAttributes)
    {
      $this->ferpaAttributes = $ferpaAttributes;
      return $this;
    }

    /**
     * @return primaryCareerType
     */
    public function getPrimaryCareer()
    {
      return $this->primaryCareer;
    }

    /**
     * @param primaryCareerType $primaryCareer
     * @return \edu\wisc\services\caos\baseStudent
     */
    public function setPrimaryCareer($primaryCareer)
    {
      $this->primaryCareer = $primaryCareer;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampusId()
    {
      return $this->campusId;
    }

    /**
     * @param string $campusId
     * @return \edu\wisc\services\caos\baseStudent
     */
    public function setCampusId($campusId)
    {
      $this->campusId = $campusId;
      return $this;
    }

    /**
     * @return gender
     */
    public function getGender()
    {
      return $this->gender;
    }

    /**
     * @param gender $gender
     * @return \edu\wisc\services\caos\baseStudent
     */
    public function setGender($gender)
    {
      $this->gender = $gender;
      return $this;
    }

}

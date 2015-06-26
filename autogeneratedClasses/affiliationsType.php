<?php

class affiliationsType
{

    /**
     * @var boolean $veteran
     */
    protected $veteran = null;

    /**
     * @var boolean $targetedMinority
     */
    protected $targetedMinority = null;

    /**
     * @var string $esl
     */
    protected $esl = null;

    /**
     * @var boolean $athlete
     */
    protected $athlete = null;

    /**
     * @var string $visaPermitType
     */
    protected $visaPermitType = null;

    /**
     * @var studentGroupsType $studentGroups
     */
    protected $studentGroups = null;

    /**
     * @var recruitingCategoriesType $recruitingCategories
     */
    protected $recruitingCategories = null;

    /**
     * @param boolean $veteran
     * @param boolean $targetedMinority
     * @param string $esl
     * @param boolean $athlete
     * @param string $visaPermitType
     * @param studentGroupsType $studentGroups
     * @param recruitingCategoriesType $recruitingCategories
     */
    public function __construct($veteran, $targetedMinority, $esl, $athlete, $visaPermitType, $studentGroups, $recruitingCategories)
    {
      $this->veteran = $veteran;
      $this->targetedMinority = $targetedMinority;
      $this->esl = $esl;
      $this->athlete = $athlete;
      $this->visaPermitType = $visaPermitType;
      $this->studentGroups = $studentGroups;
      $this->recruitingCategories = $recruitingCategories;
    }

    /**
     * @return boolean
     */
    public function getVeteran()
    {
      return $this->veteran;
    }

    /**
     * @param boolean $veteran
     * @return affiliationsType
     */
    public function setVeteran($veteran)
    {
      $this->veteran = $veteran;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTargetedMinority()
    {
      return $this->targetedMinority;
    }

    /**
     * @param boolean $targetedMinority
     * @return affiliationsType
     */
    public function setTargetedMinority($targetedMinority)
    {
      $this->targetedMinority = $targetedMinority;
      return $this;
    }

    /**
     * @return string
     */
    public function getEsl()
    {
      return $this->esl;
    }

    /**
     * @param string $esl
     * @return affiliationsType
     */
    public function setEsl($esl)
    {
      $this->esl = $esl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAthlete()
    {
      return $this->athlete;
    }

    /**
     * @param boolean $athlete
     * @return affiliationsType
     */
    public function setAthlete($athlete)
    {
      $this->athlete = $athlete;
      return $this;
    }

    /**
     * @return string
     */
    public function getVisaPermitType()
    {
      return $this->visaPermitType;
    }

    /**
     * @param string $visaPermitType
     * @return affiliationsType
     */
    public function setVisaPermitType($visaPermitType)
    {
      $this->visaPermitType = $visaPermitType;
      return $this;
    }

    /**
     * @return studentGroupsType
     */
    public function getStudentGroups()
    {
      return $this->studentGroups;
    }

    /**
     * @param studentGroupsType $studentGroups
     * @return affiliationsType
     */
    public function setStudentGroups($studentGroups)
    {
      $this->studentGroups = $studentGroups;
      return $this;
    }

    /**
     * @return recruitingCategoriesType
     */
    public function getRecruitingCategories()
    {
      return $this->recruitingCategories;
    }

    /**
     * @param recruitingCategoriesType $recruitingCategories
     * @return affiliationsType
     */
    public function setRecruitingCategories($recruitingCategories)
    {
      $this->recruitingCategories = $recruitingCategories;
      return $this;
    }

}

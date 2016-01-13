<?php

namespace edu\wisc\services\caos;

class student
{

    /**
     * @var studentAdvisorRelationshipsType $studentAdvisorRelationships
     */
    protected $studentAdvisorRelationships = null;

    /**
     * @var affiliationsType $affiliations
     */
    protected $affiliations = null;

    /**
     * @var creditsType $credits
     */
    protected $credits = null;

    /**
     * @var studentDirectoryType $directory
     */
    protected $directory = null;

    /**
     * @var enrollmentImpacts $enrollmentImpacts
     */
    protected $enrollmentImpacts = null;

    /**
     * @var enrollmentSummaryType $enrollmentSummary
     */
    protected $enrollmentSummary = null;

    /**
     * @var entryInformationType $entryInformation
     */
    protected $entryInformation = null;

    /**
     * @var photoInfoType $photoInfo
     */
    protected $photoInfo = null;

    /**
     * @var academicSummaryType $academicSummary
     */
    protected $academicSummary = null;

    /**
     * @var academicObjectiveType $academicObjective
     */
    protected $academicObjective = null;

    /**
     * @var testScoresType $testScores
     */
    protected $testScores = null;

    /**
     * @var secondarySchoolsType $secondarySchools
     */
    protected $secondarySchools = null;

    /**
     * @var residencyType $residency
     */
    protected $residency = null;

    /**
     * @param studentAdvisorRelationshipsType $studentAdvisorRelationships
     * @param affiliationsType $affiliations
     * @param creditsType $credits
     * @param studentDirectoryType $directory
     * @param enrollmentImpacts $enrollmentImpacts
     * @param enrollmentSummaryType $enrollmentSummary
     * @param entryInformationType $entryInformation
     * @param photoInfoType $photoInfo
     * @param academicSummaryType $academicSummary
     * @param academicObjectiveType $academicObjective
     * @param testScoresType $testScores
     * @param secondarySchoolsType $secondarySchools
     * @param residencyType $residency
     */
    public function __construct($studentAdvisorRelationships, $affiliations, $credits, $directory, $enrollmentImpacts, $enrollmentSummary, $entryInformation, $photoInfo, $academicSummary, $academicObjective, $testScores, $secondarySchools, $residency)
    {
      $this->studentAdvisorRelationships = $studentAdvisorRelationships;
      $this->affiliations = $affiliations;
      $this->credits = $credits;
      $this->directory = $directory;
      $this->enrollmentImpacts = $enrollmentImpacts;
      $this->enrollmentSummary = $enrollmentSummary;
      $this->entryInformation = $entryInformation;
      $this->photoInfo = $photoInfo;
      $this->academicSummary = $academicSummary;
      $this->academicObjective = $academicObjective;
      $this->testScores = $testScores;
      $this->secondarySchools = $secondarySchools;
      $this->residency = $residency;
    }

    /**
     * @return studentAdvisorRelationshipsType
     */
    public function getStudentAdvisorRelationships()
    {
      return $this->studentAdvisorRelationships;
    }

    /**
     * @param studentAdvisorRelationshipsType $studentAdvisorRelationships
     * @return \edu\wisc\services\caos\student
     */
    public function setStudentAdvisorRelationships($studentAdvisorRelationships)
    {
      $this->studentAdvisorRelationships = $studentAdvisorRelationships;
      return $this;
    }

    /**
     * @return affiliationsType
     */
    public function getAffiliations()
    {
      return $this->affiliations;
    }

    /**
     * @param affiliationsType $affiliations
     * @return \edu\wisc\services\caos\student
     */
    public function setAffiliations($affiliations)
    {
      $this->affiliations = $affiliations;
      return $this;
    }

    /**
     * @return creditsType
     */
    public function getCredits()
    {
      return $this->credits;
    }

    /**
     * @param creditsType $credits
     * @return \edu\wisc\services\caos\student
     */
    public function setCredits($credits)
    {
      $this->credits = $credits;
      return $this;
    }

    /**
     * @return studentDirectoryType
     */
    public function getDirectory()
    {
      return $this->directory;
    }

    /**
     * @param studentDirectoryType $directory
     * @return \edu\wisc\services\caos\student
     */
    public function setDirectory($directory)
    {
      $this->directory = $directory;
      return $this;
    }

    /**
     * @return enrollmentImpacts
     */
    public function getEnrollmentImpacts()
    {
      return $this->enrollmentImpacts;
    }

    /**
     * @param enrollmentImpacts $enrollmentImpacts
     * @return \edu\wisc\services\caos\student
     */
    public function setEnrollmentImpacts($enrollmentImpacts)
    {
      $this->enrollmentImpacts = $enrollmentImpacts;
      return $this;
    }

    /**
     * @return enrollmentSummaryType
     */
    public function getEnrollmentSummary()
    {
      return $this->enrollmentSummary;
    }

    /**
     * @param enrollmentSummaryType $enrollmentSummary
     * @return \edu\wisc\services\caos\student
     */
    public function setEnrollmentSummary($enrollmentSummary)
    {
      $this->enrollmentSummary = $enrollmentSummary;
      return $this;
    }

    /**
     * @return entryInformationType
     */
    public function getEntryInformation()
    {
      return $this->entryInformation;
    }

    /**
     * @param entryInformationType $entryInformation
     * @return \edu\wisc\services\caos\student
     */
    public function setEntryInformation($entryInformation)
    {
      $this->entryInformation = $entryInformation;
      return $this;
    }

    /**
     * @return photoInfoType
     */
    public function getPhotoInfo()
    {
      return $this->photoInfo;
    }

    /**
     * @param photoInfoType $photoInfo
     * @return \edu\wisc\services\caos\student
     */
    public function setPhotoInfo($photoInfo)
    {
      $this->photoInfo = $photoInfo;
      return $this;
    }

    /**
     * @return academicSummaryType
     */
    public function getAcademicSummary()
    {
      return $this->academicSummary;
    }

    /**
     * @param academicSummaryType $academicSummary
     * @return \edu\wisc\services\caos\student
     */
    public function setAcademicSummary($academicSummary)
    {
      $this->academicSummary = $academicSummary;
      return $this;
    }

    /**
     * @return academicObjectiveType
     */
    public function getAcademicObjective()
    {
      return $this->academicObjective;
    }

    /**
     * @param academicObjectiveType $academicObjective
     * @return \edu\wisc\services\caos\student
     */
    public function setAcademicObjective($academicObjective)
    {
      $this->academicObjective = $academicObjective;
      return $this;
    }

    /**
     * @return testScoresType
     */
    public function getTestScores()
    {
      return $this->testScores;
    }

    /**
     * @param testScoresType $testScores
     * @return \edu\wisc\services\caos\student
     */
    public function setTestScores($testScores)
    {
      $this->testScores = $testScores;
      return $this;
    }

    /**
     * @return secondarySchoolsType
     */
    public function getSecondarySchools()
    {
      return $this->secondarySchools;
    }

    /**
     * @param secondarySchoolsType $secondarySchools
     * @return \edu\wisc\services\caos\student
     */
    public function setSecondarySchools($secondarySchools)
    {
      $this->secondarySchools = $secondarySchools;
      return $this;
    }

    /**
     * @return residencyType
     */
    public function getResidency()
    {
      return $this->residency;
    }

    /**
     * @param residencyType $residency
     * @return \edu\wisc\services\caos\student
     */
    public function setResidency($residency)
    {
      $this->residency = $residency;
      return $this;
    }

}

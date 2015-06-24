<?php

class enrollmentClassType
{

    /**
     * @var string $courseDescription
     */
    protected $courseDescription = null;

    /**
     * @var string $courseCatalogNumber
     */
    protected $courseCatalogNumber = null;

    /**
     * @var string $courseId
     */
    protected $courseId = null;

    /**
     * @var string $courseGEBLC
     */
    protected $courseGEBLC = null;

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @var string $subjectDescription
     */
    protected $subjectDescription = null;

    /**
     * @var string $classNumber
     */
    protected $classNumber = null;

    /**
     * @var string $classSection
     */
    protected $classSection = null;

    /**
     * @var string $classSSRComponent
     */
    protected $classSSRComponent = null;

    /**
     * @var string $sessionCode
     */
    protected $sessionCode = null;

    /**
     * @var string $topicId
     */
    protected $topicId = null;

    /**
     * @var string $topicDescription
     */
    protected $topicDescription = null;

    /**
     * @var int $numCreditsTaken
     */
    protected $numCreditsTaken = null;

    /**
     * @var int $numCreditsEarned
     */
    protected $numCreditsEarned = null;

    /**
     * @var int $numCreditsProgress
     */
    protected $numCreditsProgress = null;

    /**
     * @var string $enrollmentStatus
     */
    protected $enrollmentStatus = null;

    /**
     * @var string $grade
     */
    protected $grade = null;

    /**
     * @param string $courseDescription
     * @param string $courseCatalogNumber
     * @param string $courseId
     * @param string $courseGEBLC
     * @param string $subjectCode
     * @param string $subjectDescription
     * @param string $classNumber
     * @param string $classSection
     * @param string $classSSRComponent
     * @param string $sessionCode
     * @param string $topicId
     * @param string $topicDescription
     * @param int $numCreditsTaken
     * @param int $numCreditsEarned
     * @param int $numCreditsProgress
     * @param string $enrollmentStatus
     * @param string $grade
     */
    public function __construct($courseDescription, $courseCatalogNumber, $courseId, $courseGEBLC, $subjectCode, $subjectDescription, $classNumber, $classSection, $classSSRComponent, $sessionCode, $topicId, $topicDescription, $numCreditsTaken, $numCreditsEarned, $numCreditsProgress, $enrollmentStatus, $grade)
    {
      $this->courseDescription = $courseDescription;
      $this->courseCatalogNumber = $courseCatalogNumber;
      $this->courseId = $courseId;
      $this->courseGEBLC = $courseGEBLC;
      $this->subjectCode = $subjectCode;
      $this->subjectDescription = $subjectDescription;
      $this->classNumber = $classNumber;
      $this->classSection = $classSection;
      $this->classSSRComponent = $classSSRComponent;
      $this->sessionCode = $sessionCode;
      $this->topicId = $topicId;
      $this->topicDescription = $topicDescription;
      $this->numCreditsTaken = $numCreditsTaken;
      $this->numCreditsEarned = $numCreditsEarned;
      $this->numCreditsProgress = $numCreditsProgress;
      $this->enrollmentStatus = $enrollmentStatus;
      $this->grade = $grade;
    }

    /**
     * @return string
     */
    public function getCourseDescription()
    {
      return $this->courseDescription;
    }

    /**
     * @param string $courseDescription
     * @return enrollmentClassType
     */
    public function setCourseDescription($courseDescription)
    {
      $this->courseDescription = $courseDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseCatalogNumber()
    {
      return $this->courseCatalogNumber;
    }

    /**
     * @param string $courseCatalogNumber
     * @return enrollmentClassType
     */
    public function setCourseCatalogNumber($courseCatalogNumber)
    {
      $this->courseCatalogNumber = $courseCatalogNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseId()
    {
      return $this->courseId;
    }

    /**
     * @param string $courseId
     * @return enrollmentClassType
     */
    public function setCourseId($courseId)
    {
      $this->courseId = $courseId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCourseGEBLC()
    {
      return $this->courseGEBLC;
    }

    /**
     * @param string $courseGEBLC
     * @return enrollmentClassType
     */
    public function setCourseGEBLC($courseGEBLC)
    {
      $this->courseGEBLC = $courseGEBLC;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubjectCode()
    {
      return $this->subjectCode;
    }

    /**
     * @param string $subjectCode
     * @return enrollmentClassType
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubjectDescription()
    {
      return $this->subjectDescription;
    }

    /**
     * @param string $subjectDescription
     * @return enrollmentClassType
     */
    public function setSubjectDescription($subjectDescription)
    {
      $this->subjectDescription = $subjectDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getClassNumber()
    {
      return $this->classNumber;
    }

    /**
     * @param string $classNumber
     * @return enrollmentClassType
     */
    public function setClassNumber($classNumber)
    {
      $this->classNumber = $classNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getClassSection()
    {
      return $this->classSection;
    }

    /**
     * @param string $classSection
     * @return enrollmentClassType
     */
    public function setClassSection($classSection)
    {
      $this->classSection = $classSection;
      return $this;
    }

    /**
     * @return string
     */
    public function getClassSSRComponent()
    {
      return $this->classSSRComponent;
    }

    /**
     * @param string $classSSRComponent
     * @return enrollmentClassType
     */
    public function setClassSSRComponent($classSSRComponent)
    {
      $this->classSSRComponent = $classSSRComponent;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionCode()
    {
      return $this->sessionCode;
    }

    /**
     * @param string $sessionCode
     * @return enrollmentClassType
     */
    public function setSessionCode($sessionCode)
    {
      $this->sessionCode = $sessionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTopicId()
    {
      return $this->topicId;
    }

    /**
     * @param string $topicId
     * @return enrollmentClassType
     */
    public function setTopicId($topicId)
    {
      $this->topicId = $topicId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTopicDescription()
    {
      return $this->topicDescription;
    }

    /**
     * @param string $topicDescription
     * @return enrollmentClassType
     */
    public function setTopicDescription($topicDescription)
    {
      $this->topicDescription = $topicDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumCreditsTaken()
    {
      return $this->numCreditsTaken;
    }

    /**
     * @param int $numCreditsTaken
     * @return enrollmentClassType
     */
    public function setNumCreditsTaken($numCreditsTaken)
    {
      $this->numCreditsTaken = $numCreditsTaken;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumCreditsEarned()
    {
      return $this->numCreditsEarned;
    }

    /**
     * @param int $numCreditsEarned
     * @return enrollmentClassType
     */
    public function setNumCreditsEarned($numCreditsEarned)
    {
      $this->numCreditsEarned = $numCreditsEarned;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumCreditsProgress()
    {
      return $this->numCreditsProgress;
    }

    /**
     * @param int $numCreditsProgress
     * @return enrollmentClassType
     */
    public function setNumCreditsProgress($numCreditsProgress)
    {
      $this->numCreditsProgress = $numCreditsProgress;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnrollmentStatus()
    {
      return $this->enrollmentStatus;
    }

    /**
     * @param string $enrollmentStatus
     * @return enrollmentClassType
     */
    public function setEnrollmentStatus($enrollmentStatus)
    {
      $this->enrollmentStatus = $enrollmentStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getGrade()
    {
      return $this->grade;
    }

    /**
     * @param string $grade
     * @return enrollmentClassType
     */
    public function setGrade($grade)
    {
      $this->grade = $grade;
      return $this;
    }

}

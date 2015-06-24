<?php

class classCustom
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @var boolean $published
     */
    protected $published = null;

    /**
     * @var topic $topic
     */
    protected $topic = null;

    /**
     * @var date $startDate
     */
    protected $startDate = null;

    /**
     * @var date $endDate
     */
    protected $endDate = null;

    /**
     * @var boolean $active
     */
    protected $active = null;

    /**
     * @var string $sessionCode
     */
    protected $sessionCode = null;

    /**
     * @var subjectType $subject
     */
    protected $subject = null;

    /**
     * @var string $catalogNumber
     */
    protected $catalogNumber = null;

    /**
     * @var string $courseId
     */
    protected $courseId = null;

    /**
     * @var classType $type
     */
    protected $type = null;

    /**
     * @var string $sectionNumber
     */
    protected $sectionNumber = null;

    /**
     * @var honorsType $honors
     */
    protected $honors = null;

    /**
     * @var boolean $comB
     */
    protected $comB = null;

    /**
     * @var boolean $gradedComponent
     */
    protected $gradedComponent = null;

    /**
     * @var string $instructionMode
     */
    protected $instructionMode = null;

    /**
     * @var crossListing $crossListing
     */
    protected $crossListing = null;

    /**
     * @var classMeeting $classMeeting
     */
    protected $classMeeting = null;

    /**
     * @var classAttribute $classAttribute
     */
    protected $classAttribute = null;

    /**
     * @var enrollmentStatus $enrollmentStatus
     */
    protected $enrollmentStatus = null;

    /**
     * @var string $footnote
     */
    protected $footnote = null;

    /**
     * @param classUniqueId $classUniqueId
     * @param boolean $published
     * @param topic $topic
     * @param date $startDate
     * @param date $endDate
     * @param boolean $active
     * @param string $sessionCode
     * @param subjectType $subject
     * @param string $catalogNumber
     * @param string $courseId
     * @param classType $type
     * @param string $sectionNumber
     * @param honorsType $honors
     * @param boolean $comB
     * @param boolean $gradedComponent
     * @param string $instructionMode
     * @param crossListing $crossListing
     * @param classMeeting $classMeeting
     * @param classAttribute $classAttribute
     * @param enrollmentStatus $enrollmentStatus
     * @param string $footnote
     */
    public function __construct($classUniqueId, $published, $topic, $startDate, $endDate, $active, $sessionCode, $subject, $catalogNumber, $courseId, $type, $sectionNumber, $honors, $comB, $gradedComponent, $instructionMode, $crossListing, $classMeeting, $classAttribute, $enrollmentStatus, $footnote)
    {
      $this->classUniqueId = $classUniqueId;
      $this->published = $published;
      $this->topic = $topic;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->active = $active;
      $this->sessionCode = $sessionCode;
      $this->subject = $subject;
      $this->catalogNumber = $catalogNumber;
      $this->courseId = $courseId;
      $this->type = $type;
      $this->sectionNumber = $sectionNumber;
      $this->honors = $honors;
      $this->comB = $comB;
      $this->gradedComponent = $gradedComponent;
      $this->instructionMode = $instructionMode;
      $this->crossListing = $crossListing;
      $this->classMeeting = $classMeeting;
      $this->classAttribute = $classAttribute;
      $this->enrollmentStatus = $enrollmentStatus;
      $this->footnote = $footnote;
    }

    /**
     * @return classUniqueId
     */
    public function getClassUniqueId()
    {
      return $this->classUniqueId;
    }

    /**
     * @param classUniqueId $classUniqueId
     * @return class
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPublished()
    {
      return $this->published;
    }

    /**
     * @param boolean $published
     * @return class
     */
    public function setPublished($published)
    {
      $this->published = $published;
      return $this;
    }

    /**
     * @return topic
     */
    public function getTopic()
    {
      return $this->topic;
    }

    /**
     * @param topic $topic
     * @return class
     */
    public function setTopic($topic)
    {
      $this->topic = $topic;
      return $this;
    }

    /**
     * @return date
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param date $startDate
     * @return class
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param date $endDate
     * @return class
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
      return $this->active;
    }

    /**
     * @param boolean $active
     * @return class
     */
    public function setActive($active)
    {
      $this->active = $active;
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
     * @return class
     */
    public function setSessionCode($sessionCode)
    {
      $this->sessionCode = $sessionCode;
      return $this;
    }

    /**
     * @return subjectType
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param subjectType $subject
     * @return class
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatalogNumber()
    {
      return $this->catalogNumber;
    }

    /**
     * @param string $catalogNumber
     * @return class
     */
    public function setCatalogNumber($catalogNumber)
    {
      $this->catalogNumber = $catalogNumber;
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
     * @return class
     */
    public function setCourseId($courseId)
    {
      $this->courseId = $courseId;
      return $this;
    }

    /**
     * @return classType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param classType $type
     * @return class
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getSectionNumber()
    {
      return $this->sectionNumber;
    }

    /**
     * @param string $sectionNumber
     * @return class
     */
    public function setSectionNumber($sectionNumber)
    {
      $this->sectionNumber = $sectionNumber;
      return $this;
    }

    /**
     * @return honorsType
     */
    public function getHonors()
    {
      return $this->honors;
    }

    /**
     * @param honorsType $honors
     * @return class
     */
    public function setHonors($honors)
    {
      $this->honors = $honors;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getComB()
    {
      return $this->comB;
    }

    /**
     * @param boolean $comB
     * @return class
     */
    public function setComB($comB)
    {
      $this->comB = $comB;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGradedComponent()
    {
      return $this->gradedComponent;
    }

    /**
     * @param boolean $gradedComponent
     * @return class
     */
    public function setGradedComponent($gradedComponent)
    {
      $this->gradedComponent = $gradedComponent;
      return $this;
    }

    /**
     * @return string
     */
    public function getInstructionMode()
    {
      return $this->instructionMode;
    }

    /**
     * @param string $instructionMode
     * @return class
     */
    public function setInstructionMode($instructionMode)
    {
      $this->instructionMode = $instructionMode;
      return $this;
    }

    /**
     * @return crossListing
     */
    public function getCrossListing()
    {
      return $this->crossListing;
    }

    /**
     * @param crossListing $crossListing
     * @return class
     */
    public function setCrossListing($crossListing)
    {
      $this->crossListing = $crossListing;
      return $this;
    }

    /**
     * @return classMeeting
     */
    public function getClassMeeting()
    {
      return $this->classMeeting;
    }

    /**
     * @param classMeeting $classMeeting
     * @return class
     */
    public function setClassMeeting($classMeeting)
    {
      $this->classMeeting = $classMeeting;
      return $this;
    }

    /**
     * @return classAttribute
     */
    public function getClassAttribute()
    {
      return $this->classAttribute;
    }

    /**
     * @param classAttribute $classAttribute
     * @return class
     */
    public function setClassAttribute($classAttribute)
    {
      $this->classAttribute = $classAttribute;
      return $this;
    }

    /**
     * @return enrollmentStatus
     */
    public function getEnrollmentStatus()
    {
      return $this->enrollmentStatus;
    }

    /**
     * @param enrollmentStatus $enrollmentStatus
     * @return class
     */
    public function setEnrollmentStatus($enrollmentStatus)
    {
      $this->enrollmentStatus = $enrollmentStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getFootnote()
    {
      return $this->footnote;
    }

    /**
     * @param string $footnote
     * @return class
     */
    public function setFootnote($footnote)
    {
      $this->footnote = $footnote;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class course
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $courseId
     */
    protected $courseId = null;

    /**
     * @var subjectType $subject
     */
    protected $subject = null;

    /**
     * @var string $catalogNumber
     */
    protected $catalogNumber = null;

    /**
     * @var boolean $approvedForTopics
     */
    protected $approvedForTopics = null;

    /**
     * @var topic $topic
     */
    protected $topic = null;

    /**
     * @var int $minimumCredits
     */
    protected $minimumCredits = null;

    /**
     * @var int $maximumCredits
     */
    protected $maximumCredits = null;

    /**
     * @var string $creditRange
     */
    protected $creditRange = null;

    /**
     * @var string $lastTaught
     */
    protected $lastTaught = null;

    /**
     * @var string $typicallyOffered
     */
    protected $typicallyOffered = null;

    /**
     * @var string $generalEd
     */
    protected $generalEd = null;

    /**
     * @var string $ethnicStudies
     */
    protected $ethnicStudies = null;

    /**
     * @var string $breadth
     */
    protected $breadth = null;

    /**
     * @var string $lettersAndScienceCredits
     */
    protected $lettersAndScienceCredits = null;

    /**
     * @var honorsType $honors
     */
    protected $honors = null;

    /**
     * @var string $level
     */
    protected $level = null;

    /**
     * @var boolean $openToFirstYear
     */
    protected $openToFirstYear = null;

    /**
     * @var string $advisoryPrerequisites
     */
    protected $advisoryPrerequisites = null;

    /**
     * @var string $enrollmentPrerequisites
     */
    protected $enrollmentPrerequisites = null;

    /**
     * @var boolean $crossListed
     */
    protected $crossListed = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $catalogPrintFlag
     */
    protected $catalogPrintFlag = null;

    /**
     * @var string $academicGroupCode
     */
    protected $academicGroupCode = null;

    /**
     * @var boolean $currentlyTaught
     */
    protected $currentlyTaught = null;

    /**
     * @var gradingBasisType $gradingBasis
     */
    protected $gradingBasis = null;

    /**
     * @var string $repeatable
     */
    protected $repeatable = null;

    /**
     * @var boolean $gradCourseWork
     */
    protected $gradCourseWork = null;

    /**
     * @param termCodeType $termCode
     * @param string $courseId
     * @param subjectType $subject
     * @param string $catalogNumber
     * @param boolean $approvedForTopics
     * @param topic $topic
     * @param int $minimumCredits
     * @param int $maximumCredits
     * @param string $creditRange
     * @param string $lastTaught
     * @param string $typicallyOffered
     * @param string $generalEd
     * @param string $ethnicStudies
     * @param string $breadth
     * @param string $lettersAndScienceCredits
     * @param honorsType $honors
     * @param string $level
     * @param boolean $openToFirstYear
     * @param string $advisoryPrerequisites
     * @param string $enrollmentPrerequisites
     * @param boolean $crossListed
     * @param string $title
     * @param string $description
     * @param boolean $catalogPrintFlag
     * @param string $academicGroupCode
     * @param boolean $currentlyTaught
     * @param gradingBasisType $gradingBasis
     * @param string $repeatable
     * @param boolean $gradCourseWork
     */
    public function __construct($termCode, $courseId, $subject, $catalogNumber, $approvedForTopics, $topic, $minimumCredits, $maximumCredits, $creditRange, $lastTaught, $typicallyOffered, $generalEd, $ethnicStudies, $breadth, $lettersAndScienceCredits, $honors, $level, $openToFirstYear, $advisoryPrerequisites, $enrollmentPrerequisites, $crossListed, $title, $description, $catalogPrintFlag, $academicGroupCode, $currentlyTaught, $gradingBasis, $repeatable, $gradCourseWork)
    {
      $this->termCode = $termCode;
      $this->courseId = $courseId;
      $this->subject = $subject;
      $this->catalogNumber = $catalogNumber;
      $this->approvedForTopics = $approvedForTopics;
      $this->topic = $topic;
      $this->minimumCredits = $minimumCredits;
      $this->maximumCredits = $maximumCredits;
      $this->creditRange = $creditRange;
      $this->lastTaught = $lastTaught;
      $this->typicallyOffered = $typicallyOffered;
      $this->generalEd = $generalEd;
      $this->ethnicStudies = $ethnicStudies;
      $this->breadth = $breadth;
      $this->lettersAndScienceCredits = $lettersAndScienceCredits;
      $this->honors = $honors;
      $this->level = $level;
      $this->openToFirstYear = $openToFirstYear;
      $this->advisoryPrerequisites = $advisoryPrerequisites;
      $this->enrollmentPrerequisites = $enrollmentPrerequisites;
      $this->crossListed = $crossListed;
      $this->title = $title;
      $this->description = $description;
      $this->catalogPrintFlag = $catalogPrintFlag;
      $this->academicGroupCode = $academicGroupCode;
      $this->currentlyTaught = $currentlyTaught;
      $this->gradingBasis = $gradingBasis;
      $this->repeatable = $repeatable;
      $this->gradCourseWork = $gradCourseWork;
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
     * @return \edu\wisc\services\caos\course
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
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
     * @return \edu\wisc\services\caos\course
     */
    public function setCourseId($courseId)
    {
      $this->courseId = $courseId;
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
     * @return \edu\wisc\services\caos\course
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
     * @return \edu\wisc\services\caos\course
     */
    public function setCatalogNumber($catalogNumber)
    {
      $this->catalogNumber = $catalogNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApprovedForTopics()
    {
      return $this->approvedForTopics;
    }

    /**
     * @param boolean $approvedForTopics
     * @return \edu\wisc\services\caos\course
     */
    public function setApprovedForTopics($approvedForTopics)
    {
      $this->approvedForTopics = $approvedForTopics;
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
     * @return \edu\wisc\services\caos\course
     */
    public function setTopic($topic)
    {
      $this->topic = $topic;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumCredits()
    {
      return $this->minimumCredits;
    }

    /**
     * @param int $minimumCredits
     * @return \edu\wisc\services\caos\course
     */
    public function setMinimumCredits($minimumCredits)
    {
      $this->minimumCredits = $minimumCredits;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumCredits()
    {
      return $this->maximumCredits;
    }

    /**
     * @param int $maximumCredits
     * @return \edu\wisc\services\caos\course
     */
    public function setMaximumCredits($maximumCredits)
    {
      $this->maximumCredits = $maximumCredits;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditRange()
    {
      return $this->creditRange;
    }

    /**
     * @param string $creditRange
     * @return \edu\wisc\services\caos\course
     */
    public function setCreditRange($creditRange)
    {
      $this->creditRange = $creditRange;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastTaught()
    {
      return $this->lastTaught;
    }

    /**
     * @param string $lastTaught
     * @return \edu\wisc\services\caos\course
     */
    public function setLastTaught($lastTaught)
    {
      $this->lastTaught = $lastTaught;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypicallyOffered()
    {
      return $this->typicallyOffered;
    }

    /**
     * @param string $typicallyOffered
     * @return \edu\wisc\services\caos\course
     */
    public function setTypicallyOffered($typicallyOffered)
    {
      $this->typicallyOffered = $typicallyOffered;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeneralEd()
    {
      return $this->generalEd;
    }

    /**
     * @param string $generalEd
     * @return \edu\wisc\services\caos\course
     */
    public function setGeneralEd($generalEd)
    {
      $this->generalEd = $generalEd;
      return $this;
    }

    /**
     * @return string
     */
    public function getEthnicStudies()
    {
      return $this->ethnicStudies;
    }

    /**
     * @param string $ethnicStudies
     * @return \edu\wisc\services\caos\course
     */
    public function setEthnicStudies($ethnicStudies)
    {
      $this->ethnicStudies = $ethnicStudies;
      return $this;
    }

    /**
     * @return string
     */
    public function getBreadth()
    {
      return $this->breadth;
    }

    /**
     * @param string $breadth
     * @return \edu\wisc\services\caos\course
     */
    public function setBreadth($breadth)
    {
      $this->breadth = $breadth;
      return $this;
    }

    /**
     * @return string
     */
    public function getLettersAndScienceCredits()
    {
      return $this->lettersAndScienceCredits;
    }

    /**
     * @param string $lettersAndScienceCredits
     * @return \edu\wisc\services\caos\course
     */
    public function setLettersAndScienceCredits($lettersAndScienceCredits)
    {
      $this->lettersAndScienceCredits = $lettersAndScienceCredits;
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
     * @return \edu\wisc\services\caos\course
     */
    public function setHonors($honors)
    {
      $this->honors = $honors;
      return $this;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param string $level
     * @return \edu\wisc\services\caos\course
     */
    public function setLevel($level)
    {
      $this->level = $level;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOpenToFirstYear()
    {
      return $this->openToFirstYear;
    }

    /**
     * @param boolean $openToFirstYear
     * @return \edu\wisc\services\caos\course
     */
    public function setOpenToFirstYear($openToFirstYear)
    {
      $this->openToFirstYear = $openToFirstYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvisoryPrerequisites()
    {
      return $this->advisoryPrerequisites;
    }

    /**
     * @param string $advisoryPrerequisites
     * @return \edu\wisc\services\caos\course
     */
    public function setAdvisoryPrerequisites($advisoryPrerequisites)
    {
      $this->advisoryPrerequisites = $advisoryPrerequisites;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnrollmentPrerequisites()
    {
      return $this->enrollmentPrerequisites;
    }

    /**
     * @param string $enrollmentPrerequisites
     * @return \edu\wisc\services\caos\course
     */
    public function setEnrollmentPrerequisites($enrollmentPrerequisites)
    {
      $this->enrollmentPrerequisites = $enrollmentPrerequisites;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrossListed()
    {
      return $this->crossListed;
    }

    /**
     * @param boolean $crossListed
     * @return \edu\wisc\services\caos\course
     */
    public function setCrossListed($crossListed)
    {
      $this->crossListed = $crossListed;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return \edu\wisc\services\caos\course
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \edu\wisc\services\caos\course
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCatalogPrintFlag()
    {
      return $this->catalogPrintFlag;
    }

    /**
     * @param boolean $catalogPrintFlag
     * @return \edu\wisc\services\caos\course
     */
    public function setCatalogPrintFlag($catalogPrintFlag)
    {
      $this->catalogPrintFlag = $catalogPrintFlag;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcademicGroupCode()
    {
      return $this->academicGroupCode;
    }

    /**
     * @param string $academicGroupCode
     * @return \edu\wisc\services\caos\course
     */
    public function setAcademicGroupCode($academicGroupCode)
    {
      $this->academicGroupCode = $academicGroupCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCurrentlyTaught()
    {
      return $this->currentlyTaught;
    }

    /**
     * @param boolean $currentlyTaught
     * @return \edu\wisc\services\caos\course
     */
    public function setCurrentlyTaught($currentlyTaught)
    {
      $this->currentlyTaught = $currentlyTaught;
      return $this;
    }

    /**
     * @return gradingBasisType
     */
    public function getGradingBasis()
    {
      return $this->gradingBasis;
    }

    /**
     * @param gradingBasisType $gradingBasis
     * @return \edu\wisc\services\caos\course
     */
    public function setGradingBasis($gradingBasis)
    {
      $this->gradingBasis = $gradingBasis;
      return $this;
    }

    /**
     * @return string
     */
    public function getRepeatable()
    {
      return $this->repeatable;
    }

    /**
     * @param string $repeatable
     * @return \edu\wisc\services\caos\course
     */
    public function setRepeatable($repeatable)
    {
      $this->repeatable = $repeatable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGradCourseWork()
    {
      return $this->gradCourseWork;
    }

    /**
     * @param boolean $gradCourseWork
     * @return \edu\wisc\services\caos\course
     */
    public function setGradCourseWork($gradCourseWork)
    {
      $this->gradCourseWork = $gradCourseWork;
      return $this;
    }

}

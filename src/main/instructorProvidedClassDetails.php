<?php

namespace edu\wisc\services\caos;

class instructorProvidedClassDetails
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @var string $instructorDescription
     */
    protected $instructorDescription = null;

    /**
     * @var string $typicalTopicsAndOrSchedule
     */
    protected $typicalTopicsAndOrSchedule = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @var string $learningOutcome
     */
    protected $learningOutcome = null;

    /**
     * @var string $keyword
     */
    protected $keyword = null;

    /**
     * @var labeledURI $labeledURI
     */
    protected $labeledURI = null;

    /**
     * @var \DateTime $lastUpdated
     */
    protected $lastUpdated = null;

    /**
     * @param classUniqueId $classUniqueId
     * @param string $instructorDescription
     * @param string $typicalTopicsAndOrSchedule
     * @param string $format
     * @param string $learningOutcome
     * @param string $keyword
     * @param labeledURI $labeledURI
     * @param \DateTime $lastUpdated
     */
    public function __construct($classUniqueId, $instructorDescription, $typicalTopicsAndOrSchedule, $format, $learningOutcome, $keyword, $labeledURI, \DateTime $lastUpdated)
    {
      $this->classUniqueId = $classUniqueId;
      $this->instructorDescription = $instructorDescription;
      $this->typicalTopicsAndOrSchedule = $typicalTopicsAndOrSchedule;
      $this->format = $format;
      $this->learningOutcome = $learningOutcome;
      $this->keyword = $keyword;
      $this->labeledURI = $labeledURI;
      $this->lastUpdated = $lastUpdated->format(\DateTime::ATOM);
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
     * @return \edu\wisc\services\caos\instructorProvidedClassDetails
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInstructorDescription()
    {
      return $this->instructorDescription;
    }

    /**
     * @param string $instructorDescription
     * @return \edu\wisc\services\caos\instructorProvidedClassDetails
     */
    public function setInstructorDescription($instructorDescription)
    {
      $this->instructorDescription = $instructorDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypicalTopicsAndOrSchedule()
    {
      return $this->typicalTopicsAndOrSchedule;
    }

    /**
     * @param string $typicalTopicsAndOrSchedule
     * @return \edu\wisc\services\caos\instructorProvidedClassDetails
     */
    public function setTypicalTopicsAndOrSchedule($typicalTopicsAndOrSchedule)
    {
      $this->typicalTopicsAndOrSchedule = $typicalTopicsAndOrSchedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
      return $this->format;
    }

    /**
     * @param string $format
     * @return \edu\wisc\services\caos\instructorProvidedClassDetails
     */
    public function setFormat($format)
    {
      $this->format = $format;
      return $this;
    }

    /**
     * @return string
     */
    public function getLearningOutcome()
    {
      return $this->learningOutcome;
    }

    /**
     * @param string $learningOutcome
     * @return \edu\wisc\services\caos\instructorProvidedClassDetails
     */
    public function setLearningOutcome($learningOutcome)
    {
      $this->learningOutcome = $learningOutcome;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
      return $this->keyword;
    }

    /**
     * @param string $keyword
     * @return \edu\wisc\services\caos\instructorProvidedClassDetails
     */
    public function setKeyword($keyword)
    {
      $this->keyword = $keyword;
      return $this;
    }

    /**
     * @return labeledURI
     */
    public function getLabeledURI()
    {
      return $this->labeledURI;
    }

    /**
     * @param labeledURI $labeledURI
     * @return \edu\wisc\services\caos\instructorProvidedClassDetails
     */
    public function setLabeledURI($labeledURI)
    {
      $this->labeledURI = $labeledURI;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
      if ($this->lastUpdated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastUpdated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastUpdated
     * @return \edu\wisc\services\caos\instructorProvidedClassDetails
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
      $this->lastUpdated = $lastUpdated->format(\DateTime::ATOM);
      return $this;
    }

}

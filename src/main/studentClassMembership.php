<?php

namespace edu\wisc\services\caos;

class studentClassMembership
{

    /**
     * @var student $student
     */
    protected $student = null;

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @var \DateTime $addTimestamp
     */
    protected $addTimestamp = null;

    /**
     * @var \DateTime $dropTimestamp
     */
    protected $dropTimestamp = null;

    /**
     * @param student $student
     * @param classUniqueId $classUniqueId
     * @param \DateTime $addTimestamp
     * @param \DateTime $dropTimestamp
     */
    public function __construct($student, $classUniqueId, \DateTime $addTimestamp, \DateTime $dropTimestamp)
    {
      $this->student = $student;
      $this->classUniqueId = $classUniqueId;
      $this->addTimestamp = $addTimestamp->format(\DateTime::ATOM);
      $this->dropTimestamp = $dropTimestamp->format(\DateTime::ATOM);
    }

    /**
     * @return student
     */
    public function getStudent()
    {
      return $this->student;
    }

    /**
     * @param student $student
     * @return \edu\wisc\services\caos\studentClassMembership
     */
    public function setStudent($student)
    {
      $this->student = $student;
      return $this;
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
     * @return \edu\wisc\services\caos\studentClassMembership
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAddTimestamp()
    {
      if ($this->addTimestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->addTimestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $addTimestamp
     * @return \edu\wisc\services\caos\studentClassMembership
     */
    public function setAddTimestamp(\DateTime $addTimestamp)
    {
      $this->addTimestamp = $addTimestamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDropTimestamp()
    {
      if ($this->dropTimestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dropTimestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dropTimestamp
     * @return \edu\wisc\services\caos\studentClassMembership
     */
    public function setDropTimestamp(\DateTime $dropTimestamp)
    {
      $this->dropTimestamp = $dropTimestamp->format(\DateTime::ATOM);
      return $this;
    }

}

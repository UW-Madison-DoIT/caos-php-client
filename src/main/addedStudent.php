<?php

namespace edu\wisc\services\caos;

class addedStudent
{

    /**
     * @var student $student
     */
    protected $student = null;

    /**
     * @var \DateTime $addDate
     */
    protected $addDate = null;

    /**
     * @param student $student
     * @param \DateTime $addDate
     */
    public function __construct($student, \DateTime $addDate)
    {
      $this->student = $student;
      $this->addDate = $addDate->format(\DateTime::ATOM);
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
     * @return \edu\wisc\services\caos\addedStudent
     */
    public function setStudent($student)
    {
      $this->student = $student;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAddDate()
    {
      if ($this->addDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->addDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $addDate
     * @return \edu\wisc\services\caos\addedStudent
     */
    public function setAddDate(\DateTime $addDate)
    {
      $this->addDate = $addDate->format(\DateTime::ATOM);
      return $this;
    }

}

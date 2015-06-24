<?php

class droppedStudent
{

    /**
     * @var student $student
     */
    protected $student = null;

    /**
     * @var \DateTime $dropDate
     */
    protected $dropDate = null;

    /**
     * @param student $student
     * @param \DateTime $dropDate
     */
    public function __construct($student, \DateTime $dropDate)
    {
      $this->student = $student;
      $this->dropDate = $dropDate->format(\DateTime::ATOM);
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
     * @return droppedStudent
     */
    public function setStudent($student)
    {
      $this->student = $student;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDropDate()
    {
      if ($this->dropDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dropDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dropDate
     * @return droppedStudent
     */
    public function setDropDate(\DateTime $dropDate)
    {
      $this->dropDate = $dropDate->format(\DateTime::ATOM);
      return $this;
    }

}

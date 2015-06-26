<?php

class GetStudentEmplidsEnrolledInTermResponse
{

    /**
     * @var string $emplid
     */
    protected $emplid = null;

    /**
     * @param string $emplid
     */
    public function __construct($emplid)
    {
      $this->emplid = $emplid;
    }

    /**
     * @return string
     */
    public function getEmplid()
    {
      return $this->emplid;
    }

    /**
     * @param string $emplid
     * @return GetStudentEmplidsEnrolledInTermResponse
     */
    public function setEmplid($emplid)
    {
      $this->emplid = $emplid;
      return $this;
    }

}

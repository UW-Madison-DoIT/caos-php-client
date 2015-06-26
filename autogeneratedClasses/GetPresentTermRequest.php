<?php

class GetPresentTermRequest
{

    /**
     * @var string $courseCareerCode
     */
    protected $courseCareerCode = null;

    /**
     * @param string $courseCareerCode
     */
    public function __construct($courseCareerCode)
    {
      $this->courseCareerCode = $courseCareerCode;
    }

    /**
     * @return string
     */
    public function getCourseCareerCode()
    {
      return $this->courseCareerCode;
    }

    /**
     * @param string $courseCareerCode
     * @return GetPresentTermRequest
     */
    public function setCourseCareerCode($courseCareerCode)
    {
      $this->courseCareerCode = $courseCareerCode;
      return $this;
    }

}

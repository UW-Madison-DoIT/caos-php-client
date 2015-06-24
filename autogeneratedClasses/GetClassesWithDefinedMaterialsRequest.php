<?php

class GetClassesWithDefinedMaterialsRequest
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
     * @var string $sessionCode
     */
    protected $sessionCode = null;

    /**
     * @param termCodeType $termCode
     * @param string $courseId
     * @param string $sessionCode
     */
    public function __construct($termCode, $courseId, $sessionCode)
    {
      $this->termCode = $termCode;
      $this->courseId = $courseId;
      $this->sessionCode = $sessionCode;
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
     * @return GetClassesWithDefinedMaterialsRequest
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
     * @return GetClassesWithDefinedMaterialsRequest
     */
    public function setCourseId($courseId)
    {
      $this->courseId = $courseId;
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
     * @return GetClassesWithDefinedMaterialsRequest
     */
    public function setSessionCode($sessionCode)
    {
      $this->sessionCode = $sessionCode;
      return $this;
    }

}

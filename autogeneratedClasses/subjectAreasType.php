<?php

class subjectAreasType
{

    /**
     * @var subjectAreaType $subjectArea
     */
    protected $subjectArea = null;

    /**
     * @param subjectAreaType $subjectArea
     */
    public function __construct($subjectArea)
    {
      $this->subjectArea = $subjectArea;
    }

    /**
     * @return subjectAreaType
     */
    public function getSubjectArea()
    {
      return $this->subjectArea;
    }

    /**
     * @param subjectAreaType $subjectArea
     * @return subjectAreasType
     */
    public function setSubjectArea($subjectArea)
    {
      $this->subjectArea = $subjectArea;
      return $this;
    }

}

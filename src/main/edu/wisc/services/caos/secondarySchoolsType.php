<?php

namespace edu\wisc\services\caos;

class secondarySchoolsType
{

    /**
     * @var transcriptTextType $transcriptText
     */
    protected $transcriptText = null;

    /**
     * @var secondarySchoolType $secondarySchool
     */
    protected $secondarySchool = null;

    /**
     * @param transcriptTextType $transcriptText
     * @param secondarySchoolType $secondarySchool
     */
    public function __construct($transcriptText, $secondarySchool)
    {
      $this->transcriptText = $transcriptText;
      $this->secondarySchool = $secondarySchool;
    }

    /**
     * @return transcriptTextType
     */
    public function getTranscriptText()
    {
      return $this->transcriptText;
    }

    /**
     * @param transcriptTextType $transcriptText
     * @return \edu\wisc\services\caos\secondarySchoolsType
     */
    public function setTranscriptText($transcriptText)
    {
      $this->transcriptText = $transcriptText;
      return $this;
    }

    /**
     * @return secondarySchoolType
     */
    public function getSecondarySchool()
    {
      return $this->secondarySchool;
    }

    /**
     * @param secondarySchoolType $secondarySchool
     * @return \edu\wisc\services\caos\secondarySchoolsType
     */
    public function setSecondarySchool($secondarySchool)
    {
      $this->secondarySchool = $secondarySchool;
      return $this;
    }

}

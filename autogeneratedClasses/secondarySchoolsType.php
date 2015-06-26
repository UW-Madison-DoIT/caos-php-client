<?php

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
     * @return secondarySchoolsType
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
     * @return secondarySchoolsType
     */
    public function setSecondarySchool($secondarySchool)
    {
      $this->secondarySchool = $secondarySchool;
      return $this;
    }

}

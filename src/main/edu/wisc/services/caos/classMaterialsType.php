<?php

namespace edu\wisc\services\caos;

class classMaterialsType
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @var boolean $materialsDefined
     */
    protected $materialsDefined = null;

    /**
     * @var string $noMaterialsInstructorMessage
     */
    protected $noMaterialsInstructorMessage = null;

    /**
     * @var string $sectionNotes
     */
    protected $sectionNotes = null;

    /**
     * @var \DateTime $lastUpdate
     */
    protected $lastUpdate = null;

    /**
     * @var string[] $relatedUrl
     */
    protected $relatedUrl = null;

    /**
     * @var textbook[] $textbook
     */
    protected $textbook = null;

    /**
     * @var otherMaterial[] $otherMaterial
     */
    protected $otherMaterial = null;

    /**
     * @param classUniqueId $classUniqueId
     * @param boolean $materialsDefined
     * @param string $noMaterialsInstructorMessage
     * @param string $sectionNotes
     * @param \DateTime $lastUpdate
     * @param string[] $relatedUrl
     * @param textbook[] $textbook
     * @param otherMaterial[] $otherMaterial
     */
    public function __construct($classUniqueId, $materialsDefined, $noMaterialsInstructorMessage, $sectionNotes, \DateTime $lastUpdate, array $relatedUrl, array $textbook, array $otherMaterial)
    {
      $this->classUniqueId = $classUniqueId;
      $this->materialsDefined = $materialsDefined;
      $this->noMaterialsInstructorMessage = $noMaterialsInstructorMessage;
      $this->sectionNotes = $sectionNotes;
      $this->lastUpdate = $lastUpdate->format(\DateTime::ATOM);
      $this->relatedUrl = $relatedUrl;
      $this->textbook = $textbook;
      $this->otherMaterial = $otherMaterial;
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
     * @return \edu\wisc\services\caos\classMaterialsType
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMaterialsDefined()
    {
      return $this->materialsDefined;
    }

    /**
     * @param boolean $materialsDefined
     * @return \edu\wisc\services\caos\classMaterialsType
     */
    public function setMaterialsDefined($materialsDefined)
    {
      $this->materialsDefined = $materialsDefined;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoMaterialsInstructorMessage()
    {
      return $this->noMaterialsInstructorMessage;
    }

    /**
     * @param string $noMaterialsInstructorMessage
     * @return \edu\wisc\services\caos\classMaterialsType
     */
    public function setNoMaterialsInstructorMessage($noMaterialsInstructorMessage)
    {
      $this->noMaterialsInstructorMessage = $noMaterialsInstructorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getSectionNotes()
    {
      return $this->sectionNotes;
    }

    /**
     * @param string $sectionNotes
     * @return \edu\wisc\services\caos\classMaterialsType
     */
    public function setSectionNotes($sectionNotes)
    {
      $this->sectionNotes = $sectionNotes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
      if ($this->lastUpdate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->lastUpdate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $lastUpdate
     * @return \edu\wisc\services\caos\classMaterialsType
     */
    public function setLastUpdate(\DateTime $lastUpdate)
    {
      $this->lastUpdate = $lastUpdate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRelatedUrl()
    {
      return $this->relatedUrl;
    }

    /**
     * @param string[] $relatedUrl
     * @return \edu\wisc\services\caos\classMaterialsType
     */
    public function setRelatedUrl(array $relatedUrl)
    {
      $this->relatedUrl = $relatedUrl;
      return $this;
    }

    /**
     * @return textbook[]
     */
    public function getTextbook()
    {
      return $this->textbook;
    }

    /**
     * @param textbook[] $textbook
     * @return \edu\wisc\services\caos\classMaterialsType
     */
    public function setTextbook(array $textbook)
    {
      $this->textbook = $textbook;
      return $this;
    }

    /**
     * @return otherMaterial[]
     */
    public function getOtherMaterial()
    {
      return $this->otherMaterial;
    }

    /**
     * @param otherMaterial[] $otherMaterial
     * @return \edu\wisc\services\caos\classMaterialsType
     */
    public function setOtherMaterial(array $otherMaterial)
    {
      $this->otherMaterial = $otherMaterial;
      return $this;
    }

}

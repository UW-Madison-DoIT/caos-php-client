<?php

class otherMaterial
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var materialRequirement $materialRequirement
     */
    protected $materialRequirement = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @param string $description
     * @param materialRequirement $materialRequirement
     * @param string $notes
     */
    public function __construct($description, $materialRequirement, $notes)
    {
      $this->description = $description;
      $this->materialRequirement = $materialRequirement;
      $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return otherMaterial
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return materialRequirement
     */
    public function getMaterialRequirement()
    {
      return $this->materialRequirement;
    }

    /**
     * @param materialRequirement $materialRequirement
     * @return otherMaterial
     */
    public function setMaterialRequirement($materialRequirement)
    {
      $this->materialRequirement = $materialRequirement;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return otherMaterial
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

}

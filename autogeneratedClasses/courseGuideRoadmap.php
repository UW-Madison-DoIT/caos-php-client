<?php

class courseGuideRoadmap
{

    /**
     * @var string $roadmapOwnerPvi
     */
    protected $roadmapOwnerPvi = null;

    /**
     * @var string $roadmapName
     */
    protected $roadmapName = null;

    /**
     * @var boolean $primary
     */
    protected $primary = null;

    /**
     * @param string $roadmapOwnerPvi
     * @param string $roadmapName
     * @param boolean $primary
     */
    public function __construct($roadmapOwnerPvi, $roadmapName, $primary)
    {
      $this->roadmapOwnerPvi = $roadmapOwnerPvi;
      $this->roadmapName = $roadmapName;
      $this->primary = $primary;
    }

    /**
     * @return string
     */
    public function getRoadmapOwnerPvi()
    {
      return $this->roadmapOwnerPvi;
    }

    /**
     * @param string $roadmapOwnerPvi
     * @return courseGuideRoadmap
     */
    public function setRoadmapOwnerPvi($roadmapOwnerPvi)
    {
      $this->roadmapOwnerPvi = $roadmapOwnerPvi;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoadmapName()
    {
      return $this->roadmapName;
    }

    /**
     * @param string $roadmapName
     * @return courseGuideRoadmap
     */
    public function setRoadmapName($roadmapName)
    {
      $this->roadmapName = $roadmapName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPrimary()
    {
      return $this->primary;
    }

    /**
     * @param boolean $primary
     * @return courseGuideRoadmap
     */
    public function setPrimary($primary)
    {
      $this->primary = $primary;
      return $this;
    }

}

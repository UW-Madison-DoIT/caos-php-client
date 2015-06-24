<?php

class classMaterialsURI
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @var anyURI $presentationURI
     */
    protected $presentationURI = null;

    /**
     * @param classUniqueId $classUniqueId
     * @param anyURI $presentationURI
     */
    public function __construct($classUniqueId, $presentationURI)
    {
      $this->classUniqueId = $classUniqueId;
      $this->presentationURI = $presentationURI;
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
     * @return classMaterialsURI
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getPresentationURI()
    {
      return $this->presentationURI;
    }

    /**
     * @param anyURI $presentationURI
     * @return classMaterialsURI
     */
    public function setPresentationURI($presentationURI)
    {
      $this->presentationURI = $presentationURI;
      return $this;
    }

}

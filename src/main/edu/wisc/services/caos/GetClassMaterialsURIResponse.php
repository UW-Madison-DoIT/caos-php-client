<?php

namespace edu\wisc\services\caos;

class GetClassMaterialsURIResponse
{

    /**
     * @var classMaterialsURI $classMaterialsURI
     */
    protected $classMaterialsURI = null;

    /**
     * @param classMaterialsURI $classMaterialsURI
     */
    public function __construct($classMaterialsURI)
    {
      $this->classMaterialsURI = $classMaterialsURI;
    }

    /**
     * @return classMaterialsURI
     */
    public function getClassMaterialsURI()
    {
      return $this->classMaterialsURI;
    }

    /**
     * @param classMaterialsURI $classMaterialsURI
     * @return \edu\wisc\services\caos\GetClassMaterialsURIResponse
     */
    public function setClassMaterialsURI($classMaterialsURI)
    {
      $this->classMaterialsURI = $classMaterialsURI;
      return $this;
    }

}

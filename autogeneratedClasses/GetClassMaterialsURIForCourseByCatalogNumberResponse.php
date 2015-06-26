<?php

class GetClassMaterialsURIForCourseByCatalogNumberResponse
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
     * @return GetClassMaterialsURIForCourseByCatalogNumberResponse
     */
    public function setClassMaterialsURI($classMaterialsURI)
    {
      $this->classMaterialsURI = $classMaterialsURI;
      return $this;
    }

}

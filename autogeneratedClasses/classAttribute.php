<?php

class classAttribute
{

    /**
     * @var string $attributeCode
     */
    protected $attributeCode = null;

    /**
     * @var string $attributeDisplayName
     */
    protected $attributeDisplayName = null;

    /**
     * @var string $valueCode
     */
    protected $valueCode = null;

    /**
     * @var string $valueShortName
     */
    protected $valueShortName = null;

    /**
     * @var string $valueDescription
     */
    protected $valueDescription = null;

    /**
     * @param string $attributeCode
     * @param string $attributeDisplayName
     * @param string $valueCode
     * @param string $valueShortName
     * @param string $valueDescription
     */
    public function __construct($attributeCode, $attributeDisplayName, $valueCode, $valueShortName, $valueDescription)
    {
      $this->attributeCode = $attributeCode;
      $this->attributeDisplayName = $attributeDisplayName;
      $this->valueCode = $valueCode;
      $this->valueShortName = $valueShortName;
      $this->valueDescription = $valueDescription;
    }

    /**
     * @return string
     */
    public function getAttributeCode()
    {
      return $this->attributeCode;
    }

    /**
     * @param string $attributeCode
     * @return classAttribute
     */
    public function setAttributeCode($attributeCode)
    {
      $this->attributeCode = $attributeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAttributeDisplayName()
    {
      return $this->attributeDisplayName;
    }

    /**
     * @param string $attributeDisplayName
     * @return classAttribute
     */
    public function setAttributeDisplayName($attributeDisplayName)
    {
      $this->attributeDisplayName = $attributeDisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueCode()
    {
      return $this->valueCode;
    }

    /**
     * @param string $valueCode
     * @return classAttribute
     */
    public function setValueCode($valueCode)
    {
      $this->valueCode = $valueCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueShortName()
    {
      return $this->valueShortName;
    }

    /**
     * @param string $valueShortName
     * @return classAttribute
     */
    public function setValueShortName($valueShortName)
    {
      $this->valueShortName = $valueShortName;
      return $this;
    }

    /**
     * @return string
     */
    public function getValueDescription()
    {
      return $this->valueDescription;
    }

    /**
     * @param string $valueDescription
     * @return classAttribute
     */
    public function setValueDescription($valueDescription)
    {
      $this->valueDescription = $valueDescription;
      return $this;
    }

}

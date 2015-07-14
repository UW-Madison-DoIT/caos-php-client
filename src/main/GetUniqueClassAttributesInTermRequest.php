<?php

namespace edu\wisc\services\caos;

class GetUniqueClassAttributesInTermRequest
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $attributeCode
     */
    protected $attributeCode = null;

    /**
     * @param termCodeType $termCode
     * @param string $attributeCode
     */
    public function __construct($termCode, $attributeCode)
    {
      $this->termCode = $termCode;
      $this->attributeCode = $attributeCode;
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return \edu\wisc\services\caos\GetUniqueClassAttributesInTermRequest
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
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
     * @return \edu\wisc\services\caos\GetUniqueClassAttributesInTermRequest
     */
    public function setAttributeCode($attributeCode)
    {
      $this->attributeCode = $attributeCode;
      return $this;
    }

}

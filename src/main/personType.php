<?php

namespace edu\wisc\services\caos;

class personType
{

    /**
     * @var personAttributesType $personAttributes
     */
    protected $personAttributes = null;

    /**
     * @param personAttributesType $personAttributes
     */
    public function __construct($personAttributes)
    {
      $this->personAttributes = $personAttributes;
    }

    /**
     * @return personAttributesType
     */
    public function getPersonAttributes()
    {
      return $this->personAttributes;
    }

    /**
     * @param personAttributesType $personAttributes
     * @return \edu\wisc\services\caos\personType
     */
    public function setPersonAttributes($personAttributes)
    {
      $this->personAttributes = $personAttributes;
      return $this;
    }

}

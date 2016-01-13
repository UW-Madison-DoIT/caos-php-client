<?php

namespace edu\wisc\services\caos;

class recruitingCategoryType extends codeDescriptionPairType
{

    /**
     * @var string $shortDescription
     */
    protected $shortDescription = null;

    /**
     * @param string $code
     * @param string $description
     * @param string $shortDescription
     */
    public function __construct($code, $description, $shortDescription)
    {
      parent::__construct($code, $description);
      $this->shortDescription = $shortDescription;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
      return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return \edu\wisc\services\caos\recruitingCategoryType
     */
    public function setShortDescription($shortDescription)
    {
      $this->shortDescription = $shortDescription;
      return $this;
    }

}

<?php

class subPlanType extends codeDescriptionPairType
{

    /**
     * @var codeDescriptionPairType $type
     */
    protected $type = null;

    /**
     * @param string $code
     * @param string $description
     * @param codeDescriptionPairType $type
     */
    public function __construct($code, $description, $type)
    {
      parent::__construct($code, $description);
      $this->type = $type;
    }

    /**
     * @return codeDescriptionPairType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param codeDescriptionPairType $type
     * @return subPlanType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}

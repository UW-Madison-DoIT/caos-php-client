<?php

namespace edu\wisc\services\caos;

class planType extends codeDescriptionPairType
{

    /**
     * @var codeDescriptionPairType $type
     */
    protected $type = null;

    /**
     * @var subPlansType $subPlans
     */
    protected $subPlans = null;

    /**
     * @param string $code
     * @param string $description
     * @param codeDescriptionPairType $type
     * @param subPlansType $subPlans
     */
    public function __construct($code, $description, $type, $subPlans)
    {
      parent::__construct($code, $description);
      $this->type = $type;
      $this->subPlans = $subPlans;
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
     * @return \edu\wisc\services\caos\planType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return subPlansType
     */
    public function getSubPlans()
    {
      return $this->subPlans;
    }

    /**
     * @param subPlansType $subPlans
     * @return \edu\wisc\services\caos\planType
     */
    public function setSubPlans($subPlans)
    {
      $this->subPlans = $subPlans;
      return $this;
    }

}

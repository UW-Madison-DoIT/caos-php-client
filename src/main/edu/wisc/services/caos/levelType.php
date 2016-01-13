<?php

namespace edu\wisc\services\caos;

class levelType
{

    /**
     * @var levelCode $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @param levelCode $code
     * @param string $description
     */
    public function __construct($code, $description)
    {
      $this->code = $code;
      $this->description = $description;
    }

    /**
     * @return levelCode
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param levelCode $code
     * @return \edu\wisc\services\caos\levelType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \edu\wisc\services\caos\levelType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}

<?php

class entryEventType
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @param string $code
     * @param string $description
     * @param string $type
     * @param termCodeType $termCode
     */
    public function __construct($code, $description, $type, $termCode)
    {
      $this->code = $code;
      $this->description = $description;
      $this->type = $type;
      $this->termCode = $termCode;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return entryEventType
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
     * @return entryEventType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return entryEventType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
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
     * @return entryEventType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

}

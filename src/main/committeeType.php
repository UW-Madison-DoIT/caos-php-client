<?php

namespace edu\wisc\services\caos;

class committeeType
{

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param string $id
     * @param string $description
     * @param string $type
     */
    public function __construct($id, $description, $type)
    {
      $this->id = $id;
      $this->description = $description;
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \edu\wisc\services\caos\committeeType
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \edu\wisc\services\caos\committeeType
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
     * @return \edu\wisc\services\caos\committeeType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}

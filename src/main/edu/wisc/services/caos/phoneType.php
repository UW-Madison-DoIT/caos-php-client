<?php

namespace edu\wisc\services\caos;

class phoneType
{

    /**
     * @var string $number
     */
    protected $number = null;

    /**
     * @var string $extension
     */
    protected $extension = null;

    /**
     * @var boolean $preferredFlag
     */
    protected $preferredFlag = null;

    /**
     * @param string $number
     * @param string $extension
     * @param boolean $preferredFlag
     */
    public function __construct($number, $extension, $preferredFlag)
    {
      $this->number = $number;
      $this->extension = $extension;
      $this->preferredFlag = $preferredFlag;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param string $number
     * @return \edu\wisc\services\caos\phoneType
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtension()
    {
      return $this->extension;
    }

    /**
     * @param string $extension
     * @return \edu\wisc\services\caos\phoneType
     */
    public function setExtension($extension)
    {
      $this->extension = $extension;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferredFlag()
    {
      return $this->preferredFlag;
    }

    /**
     * @param boolean $preferredFlag
     * @return \edu\wisc\services\caos\phoneType
     */
    public function setPreferredFlag($preferredFlag)
    {
      $this->preferredFlag = $preferredFlag;
      return $this;
    }

}

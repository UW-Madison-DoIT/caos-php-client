<?php

class holdType
{

    /**
     * @var termCodeType $activeTermCode
     */
    protected $activeTermCode = null;

    /**
     * @var string $activeTermDescription
     */
    protected $activeTermDescription = null;

    /**
     * @var termCodeType $endTermCode
     */
    protected $endTermCode = null;

    /**
     * @var string $endTermDescription
     */
    protected $endTermDescription = null;

    /**
     * @var string $serviceIndicatorCode
     */
    protected $serviceIndicatorCode = null;

    /**
     * @var string $reasonCode
     */
    protected $reasonCode = null;

    /**
     * @var string $reasonDescription
     */
    protected $reasonDescription = null;

    /**
     * @param termCodeType $activeTermCode
     * @param string $activeTermDescription
     * @param termCodeType $endTermCode
     * @param string $endTermDescription
     * @param string $serviceIndicatorCode
     * @param string $reasonCode
     * @param string $reasonDescription
     */
    public function __construct($activeTermCode, $activeTermDescription, $endTermCode, $endTermDescription, $serviceIndicatorCode, $reasonCode, $reasonDescription)
    {
      $this->activeTermCode = $activeTermCode;
      $this->activeTermDescription = $activeTermDescription;
      $this->endTermCode = $endTermCode;
      $this->endTermDescription = $endTermDescription;
      $this->serviceIndicatorCode = $serviceIndicatorCode;
      $this->reasonCode = $reasonCode;
      $this->reasonDescription = $reasonDescription;
    }

    /**
     * @return termCodeType
     */
    public function getActiveTermCode()
    {
      return $this->activeTermCode;
    }

    /**
     * @param termCodeType $activeTermCode
     * @return holdType
     */
    public function setActiveTermCode($activeTermCode)
    {
      $this->activeTermCode = $activeTermCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getActiveTermDescription()
    {
      return $this->activeTermDescription;
    }

    /**
     * @param string $activeTermDescription
     * @return holdType
     */
    public function setActiveTermDescription($activeTermDescription)
    {
      $this->activeTermDescription = $activeTermDescription;
      return $this;
    }

    /**
     * @return termCodeType
     */
    public function getEndTermCode()
    {
      return $this->endTermCode;
    }

    /**
     * @param termCodeType $endTermCode
     * @return holdType
     */
    public function setEndTermCode($endTermCode)
    {
      $this->endTermCode = $endTermCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndTermDescription()
    {
      return $this->endTermDescription;
    }

    /**
     * @param string $endTermDescription
     * @return holdType
     */
    public function setEndTermDescription($endTermDescription)
    {
      $this->endTermDescription = $endTermDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceIndicatorCode()
    {
      return $this->serviceIndicatorCode;
    }

    /**
     * @param string $serviceIndicatorCode
     * @return holdType
     */
    public function setServiceIndicatorCode($serviceIndicatorCode)
    {
      $this->serviceIndicatorCode = $serviceIndicatorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonCode()
    {
      return $this->reasonCode;
    }

    /**
     * @param string $reasonCode
     * @return holdType
     */
    public function setReasonCode($reasonCode)
    {
      $this->reasonCode = $reasonCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReasonDescription()
    {
      return $this->reasonDescription;
    }

    /**
     * @param string $reasonDescription
     * @return holdType
     */
    public function setReasonDescription($reasonDescription)
    {
      $this->reasonDescription = $reasonDescription;
      return $this;
    }

}

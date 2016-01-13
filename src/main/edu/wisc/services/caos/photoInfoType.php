<?php

namespace edu\wisc\services\caos;

class photoInfoType
{

    /**
     * @var anyURI $uri
     */
    protected $uri = null;

    /**
     * @var int $imageWidthPixels
     */
    protected $imageWidthPixels = null;

    /**
     * @var int $imageHeightPixels
     */
    protected $imageHeightPixels = null;

    /**
     * @var \DateTime $expires
     */
    protected $expires = null;

    /**
     * @var string $errorMessage
     */
    protected $errorMessage = null;

    /**
     * @param anyURI $uri
     * @param int $imageWidthPixels
     * @param int $imageHeightPixels
     * @param \DateTime $expires
     * @param string $errorMessage
     */
    public function __construct($uri, $imageWidthPixels, $imageHeightPixels, \DateTime $expires, $errorMessage)
    {
      $this->uri = $uri;
      $this->imageWidthPixels = $imageWidthPixels;
      $this->imageHeightPixels = $imageHeightPixels;
      $this->expires = $expires->format(\DateTime::ATOM);
      $this->errorMessage = $errorMessage;
    }

    /**
     * @return anyURI
     */
    public function getUri()
    {
      return $this->uri;
    }

    /**
     * @param anyURI $uri
     * @return \edu\wisc\services\caos\photoInfoType
     */
    public function setUri($uri)
    {
      $this->uri = $uri;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageWidthPixels()
    {
      return $this->imageWidthPixels;
    }

    /**
     * @param int $imageWidthPixels
     * @return \edu\wisc\services\caos\photoInfoType
     */
    public function setImageWidthPixels($imageWidthPixels)
    {
      $this->imageWidthPixels = $imageWidthPixels;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageHeightPixels()
    {
      return $this->imageHeightPixels;
    }

    /**
     * @param int $imageHeightPixels
     * @return \edu\wisc\services\caos\photoInfoType
     */
    public function setImageHeightPixels($imageHeightPixels)
    {
      $this->imageHeightPixels = $imageHeightPixels;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpires()
    {
      if ($this->expires == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->expires);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $expires
     * @return \edu\wisc\services\caos\photoInfoType
     */
    public function setExpires(\DateTime $expires)
    {
      $this->expires = $expires->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return \edu\wisc\services\caos\photoInfoType
     */
    public function setErrorMessage($errorMessage)
    {
      $this->errorMessage = $errorMessage;
      return $this;
    }

}

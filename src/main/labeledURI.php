<?php

namespace edu\wisc\services\caos;

class labeledURI
{

    /**
     * @var string $label
     */
    protected $label = null;

    /**
     * @var anyURI $uri
     */
    protected $uri = null;

    /**
     * @param string $label
     * @param anyURI $uri
     */
    public function __construct($label, $uri)
    {
      $this->label = $label;
      $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param string $label
     * @return \edu\wisc\services\caos\labeledURI
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
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
     * @return \edu\wisc\services\caos\labeledURI
     */
    public function setUri($uri)
    {
      $this->uri = $uri;
      return $this;
    }

}

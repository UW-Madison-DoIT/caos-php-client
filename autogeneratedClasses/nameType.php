<?php

class nameType
{

    /**
     * @var string $first
     */
    protected $first = null;

    /**
     * @var string $middle
     */
    protected $middle = null;

    /**
     * @var string $last
     */
    protected $last = null;

    /**
     * @var string $preferredFirst
     */
    protected $preferredFirst = null;

    /**
     * @var string $preferredMiddle
     */
    protected $preferredMiddle = null;

    /**
     * @param string $first
     * @param string $middle
     * @param string $last
     * @param string $preferredFirst
     * @param string $preferredMiddle
     */
    public function __construct($first, $middle, $last, $preferredFirst, $preferredMiddle)
    {
      $this->first = $first;
      $this->middle = $middle;
      $this->last = $last;
      $this->preferredFirst = $preferredFirst;
      $this->preferredMiddle = $preferredMiddle;
    }

    /**
     * @return string
     */
    public function getFirst()
    {
      return $this->first;
    }

    /**
     * @param string $first
     * @return nameType
     */
    public function setFirst($first)
    {
      $this->first = $first;
      return $this;
    }

    /**
     * @return string
     */
    public function getMiddle()
    {
      return $this->middle;
    }

    /**
     * @param string $middle
     * @return nameType
     */
    public function setMiddle($middle)
    {
      $this->middle = $middle;
      return $this;
    }

    /**
     * @return string
     */
    public function getLast()
    {
      return $this->last;
    }

    /**
     * @param string $last
     * @return nameType
     */
    public function setLast($last)
    {
      $this->last = $last;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredFirst()
    {
      return $this->preferredFirst;
    }

    /**
     * @param string $preferredFirst
     * @return nameType
     */
    public function setPreferredFirst($preferredFirst)
    {
      $this->preferredFirst = $preferredFirst;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredMiddle()
    {
      return $this->preferredMiddle;
    }

    /**
     * @param string $preferredMiddle
     * @return nameType
     */
    public function setPreferredMiddle($preferredMiddle)
    {
      $this->preferredMiddle = $preferredMiddle;
      return $this;
    }

}

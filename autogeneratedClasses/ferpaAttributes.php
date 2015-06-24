<?php

class ferpaAttributes
{

    /**
     * @var boolean $name
     */
    protected $name = null;

    /**
     * @var boolean $email
     */
    protected $email = null;

    /**
     * @param boolean $name
     * @param boolean $email
     */
    public function __construct($name, $email)
    {
      $this->name = $name;
      $this->email = $email;
    }

    /**
     * @return boolean
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param boolean $name
     * @return ferpaAttributes
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param boolean $email
     * @return ferpaAttributes
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

}

<?php

class serviceAlertType
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var studentDataOptionType $ebo
     */
    protected $ebo = null;

    /**
     * @var serviceAlertCodeType $serviceAlertCode
     */
    protected $serviceAlertCode = null;

    /**
     * @param string $_
     * @param studentDataOptionType $ebo
     * @param serviceAlertCodeType $serviceAlertCode
     */
    public function __construct($_, $ebo, $serviceAlertCode)
    {
      $this->_ = $_;
      $this->ebo = $ebo;
      $this->serviceAlertCode = $serviceAlertCode;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return serviceAlertType
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return studentDataOptionType
     */
    public function getEbo()
    {
      return $this->ebo;
    }

    /**
     * @param studentDataOptionType $ebo
     * @return serviceAlertType
     */
    public function setEbo($ebo)
    {
      $this->ebo = $ebo;
      return $this;
    }

    /**
     * @return serviceAlertCodeType
     */
    public function getServiceAlertCode()
    {
      return $this->serviceAlertCode;
    }

    /**
     * @param serviceAlertCodeType $serviceAlertCode
     * @return serviceAlertType
     */
    public function setServiceAlertCode($serviceAlertCode)
    {
      $this->serviceAlertCode = $serviceAlertCode;
      return $this;
    }

}

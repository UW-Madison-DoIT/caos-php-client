<?php

class advisingDataOptionsType
{

    /**
     * @var advisingDataOptionType[] $option
     */
    protected $option = null;

    /**
     * @param advisingDataOptionType[] $option
     */
    public function __construct(array $option)
    {
      $this->option = $option;
    }

    /**
     * @return advisingDataOptionType[]
     */
    public function getOption()
    {
      return $this->option;
    }

    /**
     * @param advisingDataOptionType[] $option
     * @return advisingDataOptionsType
     */
    public function setOption(array $option)
    {
      $this->option = $option;
      return $this;
    }

}

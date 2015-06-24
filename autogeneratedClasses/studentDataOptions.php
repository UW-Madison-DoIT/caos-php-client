<?php

class studentDataOptions
{

    /**
     * @var studentDataOptionType[] $option
     */
    protected $option = null;

    /**
     * @param studentDataOptionType[] $option
     */
    public function __construct(array $option)
    {
      $this->option = $option;
    }

    /**
     * @return studentDataOptionType[]
     */
    public function getOption()
    {
      return $this->option;
    }

    /**
     * @param studentDataOptionType[] $option
     * @return studentDataOptions
     */
    public function setOption(array $option)
    {
      $this->option = $option;
      return $this;
    }

}

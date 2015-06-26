<?php

class topic
{

    /**
     * @var string $shortDescription
     */
    protected $shortDescription = null;

    /**
     * @var string $longDescription
     */
    protected $longDescription = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $topicLastTaught
     */
    protected $topicLastTaught = null;

    /**
     * @param string $shortDescription
     * @param string $longDescription
     * @param int $id
     * @param string $topicLastTaught
     */
    public function __construct($shortDescription, $longDescription, $id, $topicLastTaught)
    {
      $this->shortDescription = $shortDescription;
      $this->longDescription = $longDescription;
      $this->id = $id;
      $this->topicLastTaught = $topicLastTaught;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
      return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return topic
     */
    public function setShortDescription($shortDescription)
    {
      $this->shortDescription = $shortDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
      return $this->longDescription;
    }

    /**
     * @param string $longDescription
     * @return topic
     */
    public function setLongDescription($longDescription)
    {
      $this->longDescription = $longDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return topic
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getTopicLastTaught()
    {
      return $this->topicLastTaught;
    }

    /**
     * @param string $topicLastTaught
     * @return topic
     */
    public function setTopicLastTaught($topicLastTaught)
    {
      $this->topicLastTaught = $topicLastTaught;
      return $this;
    }

}

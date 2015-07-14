<?php

namespace edu\wisc\services\caos;

class GetStudentsThatHaveAddedRequest
{

    /**
     * @var classUniqueId $classUniqueId
     */
    protected $classUniqueId = null;

    /**
     * @var \DateTime $since
     */
    protected $since = null;

    /**
     * @param classUniqueId $classUniqueId
     * @param \DateTime $since
     */
    public function __construct($classUniqueId, \DateTime $since)
    {
      $this->classUniqueId = $classUniqueId;
      $this->since = $since->format(\DateTime::ATOM);
    }

    /**
     * @return classUniqueId
     */
    public function getClassUniqueId()
    {
      return $this->classUniqueId;
    }

    /**
     * @param classUniqueId $classUniqueId
     * @return \edu\wisc\services\caos\GetStudentsThatHaveAddedRequest
     */
    public function setClassUniqueId($classUniqueId)
    {
      $this->classUniqueId = $classUniqueId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSince()
    {
      if ($this->since == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->since);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $since
     * @return \edu\wisc\services\caos\GetStudentsThatHaveAddedRequest
     */
    public function setSince(\DateTime $since)
    {
      $this->since = $since->format(\DateTime::ATOM);
      return $this;
    }

}

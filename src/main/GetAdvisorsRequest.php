<?php

namespace edu\wisc\services\caos;

class GetAdvisorsRequest
{

    /**
     * @var personQuery $personQuery
     */
    protected $personQuery = null;

    /**
     * @var advisingDataOptionsType $advisingDataOptions
     */
    protected $advisingDataOptions = null;

    /**
     * @var attributesForAllType $attributesForAll
     */
    protected $attributesForAll = null;

    /**
     * @param personQuery $personQuery
     * @param advisingDataOptionsType $advisingDataOptions
     * @param attributesForAllType $attributesForAll
     */
    public function __construct($personQuery, $advisingDataOptions, $attributesForAll)
    {
      $this->personQuery = $personQuery;
      $this->advisingDataOptions = $advisingDataOptions;
      $this->attributesForAll = $attributesForAll;
    }

    /**
     * @return personQuery
     */
    public function getPersonQuery()
    {
      return $this->personQuery;
    }

    /**
     * @param personQuery $personQuery
     * @return \edu\wisc\services\caos\GetAdvisorsRequest
     */
    public function setPersonQuery($personQuery)
    {
      $this->personQuery = $personQuery;
      return $this;
    }

    /**
     * @return advisingDataOptionsType
     */
    public function getAdvisingDataOptions()
    {
      return $this->advisingDataOptions;
    }

    /**
     * @param advisingDataOptionsType $advisingDataOptions
     * @return \edu\wisc\services\caos\GetAdvisorsRequest
     */
    public function setAdvisingDataOptions($advisingDataOptions)
    {
      $this->advisingDataOptions = $advisingDataOptions;
      return $this;
    }

    /**
     * @return attributesForAllType
     */
    public function getAttributesForAll()
    {
      return $this->attributesForAll;
    }

    /**
     * @param attributesForAllType $attributesForAll
     * @return \edu\wisc\services\caos\GetAdvisorsRequest
     */
    public function setAttributesForAll($attributesForAll)
    {
      $this->attributesForAll = $attributesForAll;
      return $this;
    }

}

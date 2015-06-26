<?php

class GetAdvisorCommitteesRequest
{

    /**
     * @var advisorCommitteeCodes $advisorCommitteeCodes
     */
    protected $advisorCommitteeCodes = null;

    /**
     * @var advisingDataOptionsType $advisingDataOptions
     */
    protected $advisingDataOptions = null;

    /**
     * @var attributesForAllType $attributesForAll
     */
    protected $attributesForAll = null;

    /**
     * @param advisorCommitteeCodes $advisorCommitteeCodes
     * @param advisingDataOptionsType $advisingDataOptions
     * @param attributesForAllType $attributesForAll
     */
    public function __construct($advisorCommitteeCodes, $advisingDataOptions, $attributesForAll)
    {
      $this->advisorCommitteeCodes = $advisorCommitteeCodes;
      $this->advisingDataOptions = $advisingDataOptions;
      $this->attributesForAll = $attributesForAll;
    }

    /**
     * @return advisorCommitteeCodes
     */
    public function getAdvisorCommitteeCodes()
    {
      return $this->advisorCommitteeCodes;
    }

    /**
     * @param advisorCommitteeCodes $advisorCommitteeCodes
     * @return GetAdvisorCommitteesRequest
     */
    public function setAdvisorCommitteeCodes($advisorCommitteeCodes)
    {
      $this->advisorCommitteeCodes = $advisorCommitteeCodes;
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
     * @return GetAdvisorCommitteesRequest
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
     * @return GetAdvisorCommitteesRequest
     */
    public function setAttributesForAll($attributesForAll)
    {
      $this->attributesForAll = $attributesForAll;
      return $this;
    }

}

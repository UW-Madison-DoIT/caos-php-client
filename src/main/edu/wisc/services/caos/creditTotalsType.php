<?php

namespace edu\wisc\services\caos;

class creditTotalsType
{

    /**
     * @var creditsCumulativeType $creditsCumulative
     */
    protected $creditsCumulative = null;

    /**
     * @var creditTermsType $creditTerms
     */
    protected $creditTerms = null;

    /**
     * @param creditsCumulativeType $creditsCumulative
     * @param creditTermsType $creditTerms
     */
    public function __construct($creditsCumulative, $creditTerms)
    {
      $this->creditsCumulative = $creditsCumulative;
      $this->creditTerms = $creditTerms;
    }

    /**
     * @return creditsCumulativeType
     */
    public function getCreditsCumulative()
    {
      return $this->creditsCumulative;
    }

    /**
     * @param creditsCumulativeType $creditsCumulative
     * @return \edu\wisc\services\caos\creditTotalsType
     */
    public function setCreditsCumulative($creditsCumulative)
    {
      $this->creditsCumulative = $creditsCumulative;
      return $this;
    }

    /**
     * @return creditTermsType
     */
    public function getCreditTerms()
    {
      return $this->creditTerms;
    }

    /**
     * @param creditTermsType $creditTerms
     * @return \edu\wisc\services\caos\creditTotalsType
     */
    public function setCreditTerms($creditTerms)
    {
      $this->creditTerms = $creditTerms;
      return $this;
    }

}

<?php

namespace edu\wisc\services\caos;

class studentGroupType extends codeDescriptionPairType
{

    /**
     * @param string $code
     * @param string $description
     */
    public function __construct($code, $description)
    {
      parent::__construct($code, $description);
    }

}

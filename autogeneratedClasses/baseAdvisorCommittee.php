<?php

class baseAdvisorCommittee extends committeeType
{

    /**
     * @param string $id
     * @param string $description
     * @param string $type
     */
    public function __construct($id, $description, $type)
    {
      parent::__construct($id, $description, $type);
    }

}

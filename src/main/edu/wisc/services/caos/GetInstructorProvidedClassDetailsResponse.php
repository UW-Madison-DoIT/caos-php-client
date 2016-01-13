<?php

namespace edu\wisc\services\caos;

class GetInstructorProvidedClassDetailsResponse
{

    /**
     * @var instructorProvidedClassDetails $instructorProvidedClassDetails
     */
    protected $instructorProvidedClassDetails = null;

    /**
     * @param instructorProvidedClassDetails $instructorProvidedClassDetails
     */
    public function __construct($instructorProvidedClassDetails)
    {
      $this->instructorProvidedClassDetails = $instructorProvidedClassDetails;
    }

    /**
     * @return instructorProvidedClassDetails
     */
    public function getInstructorProvidedClassDetails()
    {
      return $this->instructorProvidedClassDetails;
    }

    /**
     * @param instructorProvidedClassDetails $instructorProvidedClassDetails
     * @return \edu\wisc\services\caos\GetInstructorProvidedClassDetailsResponse
     */
    public function setInstructorProvidedClassDetails($instructorProvidedClassDetails)
    {
      $this->instructorProvidedClassDetails = $instructorProvidedClassDetails;
      return $this;
    }

}

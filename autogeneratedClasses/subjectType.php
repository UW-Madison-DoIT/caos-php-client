<?php

class subjectType
{

    /**
     * @var termCodeType $termCode
     */
    protected $termCode = null;

    /**
     * @var string $subjectCode
     */
    protected $subjectCode = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $shortDescription
     */
    protected $shortDescription = null;

    /**
     * @var string $formalDescription
     */
    protected $formalDescription = null;

    /**
     * @var anyURI $undergraduateCatalogURI
     */
    protected $undergraduateCatalogURI = null;

    /**
     * @var anyURI $graduateCatalogURI
     */
    protected $graduateCatalogURI = null;

    /**
     * @var anyURI $departmentURI
     */
    protected $departmentURI = null;

    /**
     * @var string $uddsFundingSource
     */
    protected $uddsFundingSource = null;

    /**
     * @var schoolCollege $schoolCollege
     */
    protected $schoolCollege = null;

    /**
     * @var string[] $footnote
     */
    protected $footnote = null;

    /**
     * @param termCodeType $termCode
     * @param string $subjectCode
     * @param string $description
     * @param string $shortDescription
     * @param string $formalDescription
     * @param anyURI $undergraduateCatalogURI
     * @param anyURI $graduateCatalogURI
     * @param anyURI $departmentURI
     * @param string $uddsFundingSource
     * @param schoolCollege $schoolCollege
     * @param string[] $footnote
     */
    public function __construct($termCode, $subjectCode, $description, $shortDescription, $formalDescription, $undergraduateCatalogURI, $graduateCatalogURI, $departmentURI, $uddsFundingSource, $schoolCollege, array $footnote)
    {
      $this->termCode = $termCode;
      $this->subjectCode = $subjectCode;
      $this->description = $description;
      $this->shortDescription = $shortDescription;
      $this->formalDescription = $formalDescription;
      $this->undergraduateCatalogURI = $undergraduateCatalogURI;
      $this->graduateCatalogURI = $graduateCatalogURI;
      $this->departmentURI = $departmentURI;
      $this->uddsFundingSource = $uddsFundingSource;
      $this->schoolCollege = $schoolCollege;
      $this->footnote = $footnote;
    }

    /**
     * @return termCodeType
     */
    public function getTermCode()
    {
      return $this->termCode;
    }

    /**
     * @param termCodeType $termCode
     * @return subjectType
     */
    public function setTermCode($termCode)
    {
      $this->termCode = $termCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubjectCode()
    {
      return $this->subjectCode;
    }

    /**
     * @param string $subjectCode
     * @return subjectType
     */
    public function setSubjectCode($subjectCode)
    {
      $this->subjectCode = $subjectCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return subjectType
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
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
     * @return subjectType
     */
    public function setShortDescription($shortDescription)
    {
      $this->shortDescription = $shortDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormalDescription()
    {
      return $this->formalDescription;
    }

    /**
     * @param string $formalDescription
     * @return subjectType
     */
    public function setFormalDescription($formalDescription)
    {
      $this->formalDescription = $formalDescription;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getUndergraduateCatalogURI()
    {
      return $this->undergraduateCatalogURI;
    }

    /**
     * @param anyURI $undergraduateCatalogURI
     * @return subjectType
     */
    public function setUndergraduateCatalogURI($undergraduateCatalogURI)
    {
      $this->undergraduateCatalogURI = $undergraduateCatalogURI;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getGraduateCatalogURI()
    {
      return $this->graduateCatalogURI;
    }

    /**
     * @param anyURI $graduateCatalogURI
     * @return subjectType
     */
    public function setGraduateCatalogURI($graduateCatalogURI)
    {
      $this->graduateCatalogURI = $graduateCatalogURI;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDepartmentURI()
    {
      return $this->departmentURI;
    }

    /**
     * @param anyURI $departmentURI
     * @return subjectType
     */
    public function setDepartmentURI($departmentURI)
    {
      $this->departmentURI = $departmentURI;
      return $this;
    }

    /**
     * @return string
     */
    public function getUddsFundingSource()
    {
      return $this->uddsFundingSource;
    }

    /**
     * @param string $uddsFundingSource
     * @return subjectType
     */
    public function setUddsFundingSource($uddsFundingSource)
    {
      $this->uddsFundingSource = $uddsFundingSource;
      return $this;
    }

    /**
     * @return schoolCollege
     */
    public function getSchoolCollege()
    {
      return $this->schoolCollege;
    }

    /**
     * @param schoolCollege $schoolCollege
     * @return subjectType
     */
    public function setSchoolCollege($schoolCollege)
    {
      $this->schoolCollege = $schoolCollege;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getFootnote()
    {
      return $this->footnote;
    }

    /**
     * @param string[] $footnote
     * @return subjectType
     */
    public function setFootnote(array $footnote)
    {
      $this->footnote = $footnote;
      return $this;
    }

}

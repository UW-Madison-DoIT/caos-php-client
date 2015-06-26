<?php

class textbook
{

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $isbn
     */
    protected $isbn = null;

    /**
     * @var string $publisher
     */
    protected $publisher = null;

    /**
     * @var string $author
     */
    protected $author = null;

    /**
     * @var string $year
     */
    protected $year = null;

    /**
     * @var string $edition
     */
    protected $edition = null;

    /**
     * @var materialRequirement $materialRequirement
     */
    protected $materialRequirement = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @param string $title
     * @param string $isbn
     * @param string $publisher
     * @param string $author
     * @param string $year
     * @param string $edition
     * @param materialRequirement $materialRequirement
     * @param string $notes
     */
    public function __construct($title, $isbn, $publisher, $author, $year, $edition, $materialRequirement, $notes)
    {
      $this->title = $title;
      $this->isbn = $isbn;
      $this->publisher = $publisher;
      $this->author = $author;
      $this->year = $year;
      $this->edition = $edition;
      $this->materialRequirement = $materialRequirement;
      $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param string $title
     * @return textbook
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsbn()
    {
      return $this->isbn;
    }

    /**
     * @param string $isbn
     * @return textbook
     */
    public function setIsbn($isbn)
    {
      $this->isbn = $isbn;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublisher()
    {
      return $this->publisher;
    }

    /**
     * @param string $publisher
     * @return textbook
     */
    public function setPublisher($publisher)
    {
      $this->publisher = $publisher;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param string $author
     * @return textbook
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return string
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param string $year
     * @return textbook
     */
    public function setYear($year)
    {
      $this->year = $year;
      return $this;
    }

    /**
     * @return string
     */
    public function getEdition()
    {
      return $this->edition;
    }

    /**
     * @param string $edition
     * @return textbook
     */
    public function setEdition($edition)
    {
      $this->edition = $edition;
      return $this;
    }

    /**
     * @return materialRequirement
     */
    public function getMaterialRequirement()
    {
      return $this->materialRequirement;
    }

    /**
     * @param materialRequirement $materialRequirement
     * @return textbook
     */
    public function setMaterialRequirement($materialRequirement)
    {
      $this->materialRequirement = $materialRequirement;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return textbook
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

}

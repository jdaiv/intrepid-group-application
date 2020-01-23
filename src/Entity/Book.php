<?php

namespace IntrepidGroup\SampleApplication\Entity;

/**
 * Class Book.
 *
 * This entity represents a single book and it's properties
 */
class Book
{
    private $title = '';
    private $author = '';
    private $language = '';
    private $year = 1970;
    private $rating = 0;

    public function __construct($title, $author, $language, $year, $rating)
    {
        $this->title = $title;
        $this->author = $author;
        $this->language = $language;
        $this->year = $year;
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'title' => $this->getTitle(),
            'author' => $this->getAuthor(),
            'language' => $this->getLanguage(),
            'rating' => $this->getRating(),
            'year' => $this->getYear(),
        ];
    }
}

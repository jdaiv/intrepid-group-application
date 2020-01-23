<?php

namespace IntrepidGroup\SampleApplication\Repository;

use IntrepidGroup\SampleApplication\Entity\Book;

/**
 * Class StaticBookRepository.
 *
 * This class returns acts as a Book Repository for a statically defined list of books
 */
class StaticBookRepository implements BookRepositoryInterface
{
    private $books = [];

    public function __construct()
    {
        $this->preloadStaticBooks();
    }

    /**
     * Retrieve and return a collection of all books.
     *
     * @return Book[]
     */
    public function fetchAll()
    {
        $output = [];

        /* @var $book Book */
        foreach ($this->books as $book) {
            $output[] = $book->toArray();
        }

        return $output;
    }

    /**
     * Retrieve and return a collection of all english books.
     *
     * @return Book[]
     */
    public function fetchAllLanguageEN()
    {
        $output = [];

        /* @var $book Book */
        foreach ($this->books as $book) {
            if (strtolower($book->getLanguage()) == 'english') {
                $output[] = $book->toArray();
            }
        }

        return $output;
    }

    /**
     * Preload the static list of books.
     */
    private function preloadStaticBooks()
    {
        $this->books[] = new Book(
            'Finnegans Wake',
            'Janes Joyce',
            'English',
            1941,
            3,
            'Travel');
        $this->books[] = new Book(
            'Don Quixote',
            'Miguel De Cervantes',
            'Spanish',
            1615,
            5,
            'History');
        $this->books[] = new Book(
            'The Making of Americans',
            'Gertrude Stein',
            'English',
            1925,
            5,
            'Romance');
        $this->books[] = new Book(
            'The Stranger',
            'Albert Camus',
            'French',
            1942,
            4,
            'Travel');
        $this->books[] = new Book(
            'Pilgrims Progress',
            'John Bunyan',
            'English',
            1684,
            4,
            'History');
        $this->books[] = new Book(
            'In Search of Lost Time',
            'Marcel Proust',
            'French',
            1913,
            1,
            'History');
        $this->books[] = new Book(
            'Pale Fire',
            'Valdimir Nabokov',
            'English',
            1962,
            4,
            'History');
        $this->books[] = new Book(
            'The Trial',
            'Franz Kafka',
            'German',
            1925,
            2,
            'Travel');
        $this->books[] = new Book(
            'Ulysses',
            'James Joyce',
            'English',
            1922,
            3,
            'Childrens');
        $this->books[] = new Book(
            'The Name of the Rose',
            'Umberto Eco',
            'Italian',
            1980,
            4,
            'History');
        $this->books[] = new Book(
            'The Gulag Archipelago',
            'Aleksandr Solzhenitsyn',
            'Russian',
            1973,
            4,
            'Romance');
        $this->books[] = new Book(
            'The Diary of a Young Girl',
            'Anne Frank',
            'Dutch',
            1947,
            2,
            'Travel');
        $this->books[] = new Book(
            'Gravity\'s Rainbow',
            'Thomas Pynchon',
            'English',
            1973,
            2,
            'Travel');
        $this->books[] = new Book(
            'One Hundred Years of Solitude',
            'Gabriel García Márquez',
            'Spanish',
            1967,
            5,
            'History');
        $this->books[] = new Book(
            'The Sound and the Fury',
            'William Faulkner',
            'English',
            1929,
            3,
            'Romance');
        $this->books[] = new Book(
            'Confusion of Feelings',
            'Stefan Zweig',
            'German',
            1927,
            3,
            'Travel');
        $this->books[] = new Book(
            'The Public Burning',
            'Robert Coover',
            'English',
            1977,
            1,
            'Childrens');
        $this->books[] = new Book(
            'The Joke',
            'Milan Kundera',
            'Czech',
            1967,
            5,
            'History');
    }
}

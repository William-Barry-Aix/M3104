<?php
class Library
{
    const MAX_BOOKS = 5;
    private $name;
    private $address;
    private $max;
    private $books;

    public function __construct($name, $address, $max)
    {
        $this->name = $name;
        $this->address = $address;
        $this->max = $max;
        $this->books = array();
    }

    /* @return Book[] */
    public function getBooks(){
        return $this->books;
    }

    public function __toString(){
        $res = '';

        foreach ($this->books as $book){
            $res .= $book . '<br>';
        }
        return $res;
    }

    public function getName(){
        return $this->name;
    }

    public function addBook(Book $book){
        $this->books[$book->getTitle()] = $book;
    }

    public function remBook(Book $book){
        unset($this->books[$book->getTitle()]);
    }

    public function noDoublon(){
        array_unique($this->books);
    }
    public function communBooks(Library $library){
        return array_intersect_key($this->books, $library->getBooks());
    }

    public function sortAuthor(){
        usort($this->books, "cmp_book");
    }

    function cmp_book(Book $a, Book $b){
        if ($a->getAuthor() == $b->getAuthor()) {
            return 0;
        }
        return ($a->getAuthor() > $b->getAuthor()) ? +1 : -1;
    }
}
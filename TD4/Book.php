<?php
class Book
{
    private $title;
    private $author;
    private $editor;
    private $pageNb;

    public function __construct($tile, $autor, $editor, $pageNb){
        $this->title = $tile;
        $this->author = $autor;
        $this->editor = $editor;
        $this->pageNb = $pageNb;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function __toString(){
         return '<b>' . $this->title . ' </b>' . '<br>Autheur: ' .  $this->author . ' ; Editeur: ' . $this->editor . ' ;  Nombre de Pages: ' . $this->pageNb;
    }
}
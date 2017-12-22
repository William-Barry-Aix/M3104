<?php

/**
 * Created by PhpStorm.
 * User: b17026741
 * Date: 22/12/17
 * Time: 09:47
 */
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
    public function afficher(){
         return '<b>' . $this->title . '</b>' . $this->author . $this->editor . $this->pageNb;
    }

}
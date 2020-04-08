<?php
include_once 'author.php';

class Book
{
    protected $_title;
    protected $_pdate;
    protected $_genre;
    protected $_price;
    protected $_author;

    //constructor:
    public function __construct($title, $pdate, $genre, $price)
    {

        $this->_title = $title;
        $this->_pdate = $pdate;
        $this->_genre = $genre;
        $this->_price = $price;
        $this->_author = array();
    }

     //check if the author write one aor more books:
        public function authorPerBook(){
            return count($this->_author);
        }

    // Setter
    public function setAuthor($arrayOfAuthors) {
        $this->_author = $arrayOfAuthors;
    }

    // Getters
    public function getTitle()
    {
        return $this->_title;
    }

    public function getPdate()
    {
        return $this->_pdate;
    }
    public function getGenre()
    {
        return $this->_genre;
    }
    public function getPrice()
    {
        return $this->_price;
    }

    public function getAuthor()
    {
        return $this->_author;
    }
}

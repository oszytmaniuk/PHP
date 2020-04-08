<?php
include_once 'book.php';
include_once 'author.php';
include_once 'user.php';

$author1 = new Author('Remark', 'M', 1914);
$author2 = new Author('A2', 'M', 1914);
$author3 = new Author('A3', 'M', 1914);
$authors = array($author1, $author2, $author3);

$book1 = new Book('Sapiens', 2018, 'history', 24);
$book1->setAuthor($authors);
//$book2 = new Book('PHP', 2019, 'scince', 24, 'Remark');

//echo $book1->getAuthor();
var_dump($book1);
echo $book1->authorPerBook();

$user1 = new User('User1', 'user1@gmail.com', 20);


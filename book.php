<?php

global $db;
require_once "db_connection.php";

require_once "Book.php";

$book = new Book($db);

$bookId = $_GET['book_id'];
$bookInfo = $book->getBookById($bookId);

echo "Автор: " . $bookInfo['author_id'] . "<br>";
echo "Название: " . $bookInfo['title'] . "<br>";
echo "Описание: " . $bookInfo['description'] . "<br>";
echo "Цена: " . $bookInfo['price'] . "<br>";

$db->close();



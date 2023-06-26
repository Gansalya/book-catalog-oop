<?php

global $db;
require_once "db_connection.php";

require_once "Author.php";
require_once "Book.php";

$author = new Author($db);
$book = new Book($db);

$authors = $author->getAllAuthors();

if (isset($_GET['author_id'])) {
    $authorId = $_GET['author_id'];
    $books = $author->getBooksByAuthor($authorId);

    echo "<h1>Книжный каталог</h1>";
    echo "<h2>Список книг</h2>";

    foreach ($books as $book) {
        echo '<a href="book.php?book_id=' . $book['id'] . '">' . $book['title'] . '</a><br>';
    }
} else {
    echo "<h1>Книжный каталог</h1>";
    echo "<h2>Список авторов</h2>";

    foreach ($authors as $author) {
        echo '<a href="?author_id=' . $author['id'] . '">' . $author['name'] . '</a><br>';
    }
}

$db->close();



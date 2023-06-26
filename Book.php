<?php

class Book {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getBookById($bookId) {
        $query = "SELECT * FROM books WHERE id = $bookId";
        $result = $this->db->query($query);
        return $result->fetch_assoc();
    }
}


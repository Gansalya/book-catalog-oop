<?php

class Author {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllAuthors() {
        $query = "SELECT * FROM authors";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getBooksByAuthor($authorId) {
        $query = "SELECT * FROM books WHERE author_id = $authorId";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

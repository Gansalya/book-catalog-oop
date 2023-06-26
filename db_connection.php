<?php

$db = new mysqli("localhost", "root", "123", "book-catalog-oop");

if ($db->connect_error) {
    die("Ошибка подключения к базе данных: " . $db->connect_error);
}

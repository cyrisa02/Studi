<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=book;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    exit('Erreur : '.$e->getMessage());
}
$stmt = $pdo->query('SELECT * FROM photo');
$photos = [];
while ($photo = $stmt->fetchObject()) {
    $photos[] = $photo;
}
require_once 'vues/liste-photos.php';

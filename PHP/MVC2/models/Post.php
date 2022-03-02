<?php

class Posts
{
    private $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
        } catch (PDOException $e) {
            exit('Erreur : '.$e->getMessage());
        }
    }

    public function getPosts()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT title, image FROM post');
        }
        $posts = [];
        while ($post = $stmt->fetchObject()) {
            $posts[] = $post;
        }

        return $posts;
    }
}
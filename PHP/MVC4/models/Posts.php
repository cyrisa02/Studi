<?php
//Etape 2 utilise le trait Model pour plusieurs posts
class Posts
{
    use Model;

    public function getPosts()
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->query('SELECT id, image, title FROM post');
        }
        $posts = [];
        while ($post = $stmt->fetchObject('Post')) {
            $posts[] = $post;
        }

        return $posts;
    }
}
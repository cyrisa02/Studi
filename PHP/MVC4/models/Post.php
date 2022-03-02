<?php
//Etape 3, use le trait Model pour un seul post
class Post
{
    use Model;

    private $id;

    private $image;

    private $title;

    public function getPost($id)
    {
        if (!is_null($this->pdo)) {
            $stmt = $this->pdo->prepare('SELECT id, image, title FROM post WHERE id = ?');
        }
        $post = null;
        if ($stmt->execute([$id])) {
            $post= $stmt->fetchObject('Post');
            if (!is_object($post)) {
                $post = null;
            }
        }

        return $post;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getTitle()
    {
        return $this->title;
    }
}
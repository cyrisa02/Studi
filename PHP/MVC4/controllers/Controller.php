<?php
//Etape 9

class Controller
{
    public function getPosts()
    {
        $posts = new Posts();
        $posts = $posts->getPosts();
        require_once('views/posts-list.php');
    }

    public function getPost()
    {
        $post = new Post();
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $post = $post->getPost($_GET['id']);
        }
        require_once('views/post-show.php');
    }
}
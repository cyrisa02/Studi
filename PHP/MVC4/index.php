<?php

require_once 'controllers/Controller.php';
require_once 'models/Model.php';
require_once 'models/Post.php';
require_once 'models/Posts.php';
$controleur = new Controller();
if (isset($_GET['id'])) {
    $controleur->getPost();
} else {
    $controleur->getPosts();
}

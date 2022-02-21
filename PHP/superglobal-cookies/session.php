<?php
    session_start();// à mettre en premier sinon ça peut planter le serveur!
    if (isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];  
    }



    if (isset($_SESSION['username'])) {
        echo 'Bonjour'.$_SESSION['username'];
    } else {
        include 'sessionhtml.html';
    }


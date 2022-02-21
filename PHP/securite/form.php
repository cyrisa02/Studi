<?php
session_start();
$_SESSION['id']=1; // exemple

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST;
    $user['id']=$_SESSION['id'];
    var_dump($user);
}

?>

<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>Modification de l'utilisateur connecté n°<?=
        $_SESSION['id'] ?> </h1>
        <form action="" method="POST">
    <label >Username: 
        <input name="username"/>
    </label>
    <input type="submit">
    </form>
    </body>
</html>


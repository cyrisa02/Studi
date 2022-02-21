<?php
function displayList(int $count) {  // on attend un entier sinon on a rien
    $html='';
    $count = in_array($count, [10,20,50]) ? $count : 10; // c'est cette ligne qui bloque le dépassement
    for ($i=0; $i<$count;$i++) {
        $html .= '<li> Item n°'.$i.'</li>';

}
    return $html;
}
?>

<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>List of items</h1>
        <ul>
            <?php $count=is_numeric($_GET['count']) ? $_GET['count'] : 10; ?>
            <?= displayList($_GET['count'])          
            ?>
        </ul>
    </body>
</html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>List of items</h1>
        <ul>
            <?php
            $count = $_GET['count'];
            $count = in_array($count, [10,20,50]) ? $count : 10; // c'est cette ligne qui bloque le dépassement
            for ($i=0; $i<$count;$i++) {
                echo '<li> Item n°'.$i.'</li>';
            }
            ?>
        </ul>
    </body>
</html>
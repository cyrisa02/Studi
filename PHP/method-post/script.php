<?php
// script.php. attacdhé à method-post.php
print_r($_POST); // Affichera Array ([lastname] => doe [languages] => Array ([0] => php [1] => javascript))
if (isset($_POST['lastname'])) {
    echo $_POST['lastname']; // Affichera 'doe'.

}else {
    echo 'Pas de nom, donnez votre nom';
}

?>
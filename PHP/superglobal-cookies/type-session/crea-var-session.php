//
Créez un script index.php dans lequel vous initialiserez trois variables de session auxquelles vous attribuerez une valeur : $name, $age, $favoriteLangages.


 <?php
 // index.php
 session_start();
 
 $_SESSION['name'] = 'Laurent';
 $_SESSION['age'] = 27;
 $_SESSION['favoriteLangages'] = ['PHP', 'HTML', 'CSS'];
 
 echo 'Session initialisée';
<?php
setcookie('SITE_LANG','fr',time() + 3600); //création d'un cookie nommé SITE_LANG dont la valeur est fr et son temps de vie une heure, pour faire expirer un cookie mettre -3600

//uniquement apparence du site, pas de id, password!!!

var_dump ($_COOKIE);
if ($_COOKIE['SITE_LANG']==='fr') {
    echo 'Bienvenue';
} else {
    echo 'Welcome';
}

//RGPD
//13 mois maximum






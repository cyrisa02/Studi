<?php

if (isset($_GET['nom']) && isset($_GET['age']))
{
    echo sprintf("Bonjour, mon nom est %s et j'ai %s ans. <br/>", $_GET['nom'], $_GET['age']);
} else {
    echo 'Je souhaite afficher mon nom et mon âge. Avez-vous oublié quelque chose ? <br/>';
}

if (isset($_GET['admin']) && 1 === (int) $_GET['admin']) {
    echo 'Je suis administrateur <br/>';
} else {
    echo 'Je ne suis pas administrateur <br/>';
}
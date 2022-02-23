<?php
//Une regex est une chaîne de caractères modélisant un ensemble de chaînes de caractères, en vérifiant des paramètres définis.

//Test avec regex 101

//   0123456789  abcdefghijklmnopqrstuvwxyz    dans la zone test

// https://regex101.com/



$subject = 'Comment chercher une chaîne dans une autre ?';
$pattern = '/chaîne/'; //  / caractère spécial est nommé délimiteur.

preg_match($pattern, $subject, $matches);  //preg_match_all retourne le nombre de fois où la chaîne a été trouvée

var_dump($matches);

$subject = '0123456789';
$search = '456';
$pattern = "/$search/";

if (preg_match($pattern, $subject)) {
  echo "$search est présent dans $subject";
} else {
  echo "$search n'est pas présent dans $subject";
}


$subject = '0123456789';
$search = '456';
$pattern = "/$search/";

$offset = 5;

if (preg_match($pattern, $subject, $matches, null, $offset)) {
    echo "$search est présent dans ".substr($subject, $offset);
} else {
    echo "$search n'est pas présent dans ".substr($subject, $offset);
}

var_dump($matches);

// pattern1|pattern2 signifie que nous cherchons les occurrences de pattern1 et de pattern2

$subject = 'chaîner enchaîner enchaînement';
$pattern = '/enchaîner|enchaînement/';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);

// L'utilisation des métacaractères ( et ) signifie que nous allons regrouper deux modèles : pattern(1|2) sera équivalent à pattern1|pattern2. Cela pourrait nous servir, par exemple, à retourner les termes ayant le même préfixe sans avoir à répéter le préfixe autant de fois qu'il apparaît. C'est une factorisation de la regex

$subject = 'chaîner enchaîner enchaînement';
$pattern = '/enchaîn(er|ement)/';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);

//Grâce à la fonction PHP adéquate et aux groupes et alternatives, comptez le nombre de fois où les mots she et the apparaissent dans le texte.


$sentence = 'Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”';

if (preg_match_all('/(s|t)he/', $sentence, $matches)) {
    echo 'Les mots "she" et "the" sont présents '.count($matches[0]).' fois.';
} else {
    echo 'Les mots "she" et "the" ne sont pas présents';
}

var_dump($matches);


//Quantificateur

$password = 'aaazerty zerty';
$pattern = '/a?zerty/'; // Le ? indique que le caractère est optionnel. Il peut apparaître 0 ou 1 fois.

preg_match_all($pattern, $password, $matches);

var_dump($matches);


$subject = 'john@doe.com';
$pattern = '/@+/'; // Le + indique que le caractère est obligatoire. Il doit apparaître 1 ou plusieurs fois. Bien pour les adresse mail!!!

if (preg_match($pattern, $subject)) {
  echo "$subject semble être une adresse email valide";
}


$password = 'aaazerty';
$pattern = '/a*zerty/';//Le * indique que le caractère est optionnel, il peut apparaître 1 fois. Mais contrairement au ?, il peut aussi apparaître plusieurs fois.

preg_match($pattern, $password, $matches);

var_dump($matches);

$password = 'zerty azerty aazerty aaazerty aaaazerty';
$pattern = '/a{2,4}zerty/';// a notation {x} indique une répétition x fois, et {x,y} indique une répétition comprise entre x et y fois. L'écriture {x,} existe aussi et permet d'indiquer une répétition d'au moins x fois.

preg_match_all($pattern, $password, $matches);

var_dump($matches); 

//? est équivalent à {0,1} c'est comme des bornes mini=0 et max=1, caractère peut être facultatif

// + est équivalent à {1,}, le carctére peut apparaître une ou plusieurs fois

// * est équivalent à {0,}


$subject = 'azerty azazerty boerty erty';
$pattern = '/(az|bo){1,2}erty/';

preg_match_all($pattern, $subject, $matches);

var_dump($matches);

// Grâce au code PHP adéquat, vérifiez que les trois premiers numéros de téléphone sont corrects et que les deux derniers ne le sont pas.




$phoneNumbers = [
    '0102030405',
    '0112030405',
    '01 02 03 04 05',
    '1102030405',
    '01.02.03.04.05', //? est équivalent à {0,1} c'est comme des bornes mini=0 et max=1
];

foreach ($phoneNumbers as $phoneNumber) {
    if (preg_match('/0(1|2|3|4|5|6|7|8|9|0)( ?((0|1|2|3|4|5|6|7|8|9|0)(0|1|2|3|4|5|6|7|8|9|0))){4}/', $phoneNumber)) {
        echo "$phoneNumber est au bon format.".PHP_EOL;
    } else {
        echo "$phoneNumber n'est pas au bon format.".PHP_EOL;
    }
}

//

//Bonjour, ce code permet de tester un numéro de téléphone à 10 chiffres: Le premier bloc commence par un "0" suivi d'un chiffre entre 1 et 10. Ensuite il y a un bloc contenant éventuellement un espace " ?", suivi d'un chiffre entre 0 et 9, suivi lui même d'un nombre entre 0 et 9. Ce deuxième bloc (espace éventuel compris) est à répéter 4 fois, d'où le {4}. Avec ce test, "0102030405" ou "01 02 03 04 05" seront considérés comme valides.


// Classe de caractère

$password = '123456789 abcdefghijklmnopqrstuvwxyz';
$pattern = '/[789]|[lmnop]/';

preg_match_all($pattern, $password, $matches);

var_dump($matches);

//Les classes peuvent s'écrire de différentes manières : [] pour rechercher exactement les caractères indiqués, [-] pour définir un intervalle de caractères (permet de ne pas tous les saisir). Et enfin [^ ] pour exclure un ensemble de caractères.

$password = '123456789 abcdefghijklmnopqrstuvwxyz';
$pattern = '/[7-9]|[l-p]/';// comme les pages pour l'impression

preg_match_all($pattern, $password, $matches);

var_dump($matches);


$password = '123456789';
$pattern = '/[^7-9]/';//Cette fois, l'ensemble 7-9 n'est pas souhaité [^7-9]. Le résultat obtenu est donc l'ensemble des autres caractères, à savoir 0-6.

preg_match_all($pattern, $password, $matches);

var_dump($matches);

//    \d est l'équivalent de [0-9].

//      \D est l'équivalent de [^0-9]. Pas les nombres

//      \w est l'équivalent de [a-zA-Z0-9_]. ttes les valeurs alphanumériques

//      \W est l'équivalent de [^a-zA-Z0-9_]. ttes les valeurs autres que alphanumériques

// pour voir d'autres raccourcis, regex 101 aller dans Quick REFERENCE / Meta Sequence en bas à gauche


$string = 'recherche des caracteres autres qu\'alphanumerique !'; // vérif d'une URL
$pattern = '/\W/';

preg_match_all($pattern, $string, $matches);

var_dump($matches);


// Grâce à la fonction PHP adéquate, vérifiez que toutes ces adresses e-mails sont correctes


$emailAddresses = [
    'john@doe.fr',
    'john@localhost',
    'john+1@localhost',
    '@doe.fr',
    'john@.fr',
];

foreach ($emailAddresses as $emailAddress) {
    if (preg_match('/[\w+]+@\w+(\.\w*)?/', $emailAddress)) {
        echo "$emailAddress est au bon format.".PHP_EOL;
    } else {
        echo "$emailAddress n'est pas au bon format.".PHP_EOL;
    }
}

// Ancres - curseur

// début

$string = '456789 123456789';
$pattern = '/^123/';

preg_match($pattern, $string, $matches);

var_dump($matches); // ici, aucune correspondance n'est trouvée, puisque la section "123" n'est pas au début de la chaîne

// fin

$string = '123456789 123456789';
$pattern = '/123$/';

preg_match($pattern, $string, $matches);

var_dump($matches); // Ici, aucune correspondance n'est trouvée, puisque la section "123" n'est pas à la fin de la chaîne.

// Grâce à la fonction PHP adéquate, vérifiez que toutes ces adresses e-mails sont correctes :

$emailAddresses = [
    'john@doe.fr',
    'john@localhost',
    'john+1@localhost',
    'john+1@localhost+1',
    '+1@doe.fr',
    '@doe.fr',
    'john@.fr',
];

foreach ($emailAddresses as $emailAddress) {
    if (preg_match('/\w[\w+]+@\w+(\.\w*)?$/', $emailAddress)) {
        echo "$emailAddress est au bon format.".PHP_EOL;
    } else {
        echo "$emailAddress n'est pas au bon format.".PHP_EOL;
    }
}



// Ce sont les flags dans regex 101 voir REGEX FLAG

//'option global, g, indique à la regex de retourner toutes les occurrences recherchées.

//L'option multiline, m, indique à la regex de rechercher le pattern sur plusieurs lignes. à utiliser avec ^ début et $ fin
// dans pHP utiliser \n et mettre des "" pas des ' ' ,  \n qui correspond à ENTER (passer à la ligne) dans regex101
// L'option insensitive, i, indique à la regex de ne pas respecter la casse.

// Ces options sont généralement placées en fin de regex après le délimiteur : $pattern= '/pattern/gmi';


//Grâce à la fonction PHP adéquate, vérifiez que toutes ces adresses e-mails sont correctes :

// Cette fois, vous partirez du pattern ^[a-z][a-z0-9+]*@[a-z]+(\.[a-z]+)?$. Vous ne pourrez pas le modifier, mais vous pouvez jouer avec les options

$emails = [
	'john@doe.fr',
	'john@localhost',
	'john+1@localhost',
	'John+1@localhost',
	'john+1@localhost+1',
	'+1@doe.fr',
	'@doe.fr',
	'john@.fr',
];

foreach ($emails as $email) {
    if (preg_match('/^[a-z][a-z0-9+]*@[a-z]+(\.[a-z]+)?$/i', $email)) {
        echo "$email est au bon format.".PHP_EOL;
    } else {
        echo "$email n'est pas au bon format.".PHP_EOL;
    }
}
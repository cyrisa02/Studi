<?php
//Écrivez une fonction qui permettra d'initialiser une arborescence de fichiers selon les critères suivants :

//La fonction prendra en paramètres le répertoire(folder) racine et la liste/tableau des utilisateurs.

//Pour chaque utilisateur, elle créera les dossiers décrits ci-après, en regroupant les utilisateurs qui ont le même nom.

//Ajoutez à la racine du dossier de chaque utilisateur un fichier welcome.txt contenant le message Bienvenue {prenom} {nom}. Si le fichier existe déjà, il ne doit pas être modifié.

//La fonction renverra un tableau avec, pour chaque utilisateur, le chemin vers le fichier welcome.txt et sa taille, comme décrit ci-après.
//     nom/prenom/welcome.txt en minuscule





function initUserFolders(string $rootFolder, array $users): array
{
    $rootFolder = realpath($rootFolder) . DIRECTORY_SEPARATOR;// La fonction realpath() permet de retourner le chemin absolu d'un fichier ou d'un dossier.

    foreach ($users as $index => $user) {
        $userFolder = $rootFolder . strtolower($user['lastname']) . DIRECTORY_SEPARATOR . strtolower($user['firstname']) . DIRECTORY_SEPARATOR;
        $userFile = $userFolder . 'welcome.txt';

        if (!is_dir($userFolder)) {
            mkdir($userFolder, 0777, true);
        }

        if (!is_file($userFile)) {
            $resource = fopen($userFile, 'w');
            fwrite($resource, 'Bienvenue ' . implode(' ', $user));
            fclose($resource);
        }

        $users[$index]['file'] = [ // voir le résultat attentu, création de la clé file
            'path' => $userFile,
            'size' => filesize($userFile),
        ];
    }

    return $users;
}

$users = [
    ['firstname' => 'Mathilde', 'lastname' => 'Dubois'],
    ['firstname' => 'Eric', 'lastname' => 'Blanchard'],
    ['firstname' => 'Manon', 'lastname' => 'Dubois'],
];

initUserFolders('.', $users); //Notre programme pourrait être exécuté de la sorte : initUserFolders('.', $users);.



/// Résultats attendu

//$users = [
    //['firstname' => 'Mathilde', 'lastname' => 'Dubois', 'file' => ['path' => '/app/public/dubois/mathilde/welcome.txt', 'size' => 25]],
   // ['firstname' => 'Eric', 'lastname' => 'Blanchard', 'file' => ['path' => '/app/public/blanchard/eric/welcome.txt', 'size' => 24]],
   // ['firstname' => 'Manon', 'lastname' => 'Dubois', 'file' => ['path' => '/app/public/dubois/manon/welcome.txt', 'size' => 22]],
//];
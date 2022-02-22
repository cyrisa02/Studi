<?php
//    Définir des valeurs par défaut pour les champs de formulaire (au cas où un utilisateur utiliserait un client HTTP pour soumettre son fichier)

//Supprimer l'information des types MIME autorisés et les stocker en dur dans une variable, car c'est une information sensible

//Effectuer les vérifications d'usage sur le bon téléchargement et le format du fichier

//Vérifier que le fichier ne pèse pas plus de 2 Mo

//Vérifier que le nom du fichier stocké dans $_POST['filename'] ne contient que des caractères alphanumériques, des tirets ou des underscores

//Stocker le fichier dans le répertoire uploads/ avec un nom unique (ici, on utilisera le nom fourni par l'utilisateur en y ajoutant un hash et l'extension du fichier en fonction de son type MIME, par exemple mon-image.a58f535ebc.jpg)






function isUploadSuccessful(array $uploadedFile): bool {
    return isset($uploadedFile['error']) && $uploadedFile['error'] === UPLOAD_ERR_OK;
}

function isUploadSmallerThan2M(array $uploadedFile): bool {
    return $uploadedFile['size'] < 2000000;
}

function isMimeTypeAuthorized(array $authorizedMimeTypes, array $uploadedFile): bool {
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $finfo->file($uploadedFile['tmp_name']);

    return in_array($mimeType, $authorizedMimeTypes, true);
}

function getExtensionFromMimeType(array $authorizedMimeTypes, array $uploadedFile): string {
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $finfo->file($uploadedFile['tmp_name']);

    if ($extension = array_search($mimeType, $authorizedMimeTypes, true)) {
        return $extension;
    }

    throw new RuntimeException('Le type MIME n\'est lié à aucune extension');
}

function moveUploadedFile(array $uploadedFile, string $filename, string $extension): bool {
    return move_uploaded_file(
        $uploadedFile['tmp_name'],
        sprintf('./uploads/%s.%s.%s',
            $filename,
            sha1_file($uploadedFile['tmp_name']),
            $extension
        )
    );
}

@mkdir('./uploads', 0644);

// 2
$authorizedMimeTypes = [
    'png' => 'image/png',
    'jpg' => 'image/jpeg',
    'gif' => 'image/gif',
];
$message = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // 1
        $filename = $_POST['filename'] ?? null;
        $uploadedFile = $_FILES['uploaded_file'] ?? [];

        // 3
        if (!isUploadSuccessful($uploadedFile)) {
            throw new RuntimeException('Le téléchargement a échoué');
        }

        if (!isMimeTypeAuthorized($authorizedMimeTypes, $uploadedFile)) {
            throw new RuntimeException('Le type de fichier n\'est pas supporté');
        }

        // 4
        if (!isUploadSmallerThan2M($uploadedFile)) {
            throw new RuntimeException('Le fichier dépasse les 2 Mo');
        }

        // 5
        if (!preg_match('/^[\w-]+$/', $filename)) {
            throw new RuntimeException('Le nom du fichier ne doit pas être vide et ne contenir que des lettres, des chiffres, des tirets ou des underscores');
        }

        if (!moveUploadedFile($uploadedFile, $filename, getExtensionFromMimeType($authorizedMimeTypes, $uploadedFile))) {
            throw new RuntimeException('Le téléchargement a échoué');
        }

        $message = 'Upload réussi';
    } catch (RuntimeException $e) {
        $message = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upload de fichier</title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <?= $message ? sprintf('<p>%s</p>', $message) : '' ?>
            <label>
                Nom de l'image
                <input type="text" name="filename">
            </label>
            <label>
                Fichier à télécharger
                <input type="file" name="uploaded_file">
            </label>
            <!-- 2 -->
            <input type="submit" value="Envoyer">
        </form>
    </body>
</html>
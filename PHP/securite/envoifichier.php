<?php
//Tout d'abord, il convient de valider qu'il n'y a pas d'erreur dans la superglobale $_FILES concernant le fichier :


function isUploadSuccessful(array $uploadedFile): bool {
    return isset($uploadedFile['error']) && $uploadedFile['error'] === UPLOAD_ERR_OK;
}

if (!isUploadSuccessful($_FILES['uploaded_file'])) {
    throw new RuntimeException('Error while uploading file.');
}

//Ensuite, nous pouvons vérifier que la taille du fichier ne dépasse pas la taille maximale :

    function isUploadSmallerThan2M(array $uploadedFile): bool {
        return $uploadedFile['size'] < 2000000;
    }
    
    if (!isUploadSmallerThan2M($_FILES['uploaded_file'])) {
        throw new RuntimeException('File is too big.');
    }


    //La gestion des fichiers se fait avec un contrôle rigoureux du type de fichier autorisé, afin d'interdire le téléchargement de fichiers dangereux comme des fichiers PHP ou shell. Pour cela, il faut se baser sur le type MIME du fichier, il ne faut pas faire confiance à son extension ou à la valeur de $_FILES['uploaded_file']['type'].



    function isMimeTypeAuthorized(array $uploadedFile): bool {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->file($uploadedFile['tmp_name']);
    
        return in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif'], true);
    }
    
    
    if (!isMimeTypeAuthorized($_FILES['uploaded_file'])) {
        throw new RuntimeException('Invalid file mime type.');
    }

    //Nous pouvons aussi vérifier que notre fichier se télécharge bien en générant un nom de fichier unique (il faut se méfier de la valeur de $_FILES['uploaded_file']['name']) :

        function getExtensionFromMimeType(string $mimeType): ?string {
            switch ($mimeType) {
                case 'image/jpeg':
                    return 'jpg';
                case 'image/png':
                    return 'png';
                case 'image/gif':
                    return 'gif';
                default:
                    return null;
            }
        }
        
        function moveUploadedFile(array $uploadedFile): bool {
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo->file($uploadedFile['tmp_name']);
        
            return move_uploaded_file(
                $uploadedFile['tmp_name'],
                sprintf('./uploads/%s.%s',
                    sha1_file($uploadedFile['tmp_name']),
                    getExtensionFromMimeType($mimeType)
                )
            );
        }
        
        if (!moveUploadedFile($_FILES['uploaded_file'])) {
            throw new RuntimeException('Impossible to upload file.');
        }

        //
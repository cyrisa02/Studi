<?php
function isUploadSuccessful(array $uploadedFile): bool {
    return isset($uploadedFile['error']) && $uploadedFile['error'] === UPLOAD_ERR_OK;
}

function isUploadSmallerThan2M(array $uploadedFile): bool {
    return $uploadedFile['size'] < 2000000;
}

function isMimeTypeAuthorized(array $uploadedFile): bool {
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mimeType = $finfo->file($uploadedFile['tmp_name']);

    return in_array($mimeType, ['image/jpeg', 'image/png', 'image/gif'], true);
}

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
            sha1_file($uploadedFile['tmp_name']),// il faut créer un répertoire uploads pour que les fichiers se stockent
            getExtensionFromMimeType($mimeType)
        )
    );
}

if (!moveUploadedFile($_FILES['uploaded_file'])) {
    throw new RuntimeException('Impossible to upload file.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (!isUploadSuccessful($_FILES['uploaded_file'])) {
            throw new RuntimeException('Error while uploading file.');
        }

        if (!isUploadSmallerThan2M($_FILES['uploaded_file'])) {
            throw new RuntimeException('File is too big.');
        }

        if (!isMimeTypeAuthorized($_FILES['uploaded_file'])) {
            throw new RuntimeException('Invalid file mime type.');
        }

        moveUploadedFile($_FILES['uploaded_file']);
    } catch (RuntimeException $e) {
        die($e->getMessage());
    }
}
?>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
        <h1>Image upload</h1>
        <form method="POST" enctype="multipart/form-data">
            <label>
                Image:
                <input type="file" name="uploaded_file">
            </label>
            <input type="submit">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            echo '<img src="'.$_FILES['uploaded_file']['name'].'">';
        }
        ?>
    </body>
</html>
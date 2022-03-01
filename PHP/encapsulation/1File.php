<?php

// Etape 1 , création d'une classe
class File
{
    public $fileResource;

    public function __construct(string $filename)
    {
        $this->fileResource = fopen($filename, 'a'); //fopen retourne une ressource = lien vers le fichier
    }

    public function write(string $content)
    {
        return fwrite($this->fileResource, $content);
    }

    public function close(): bool
    {
        return fclose($this->fileResource);
    }
}

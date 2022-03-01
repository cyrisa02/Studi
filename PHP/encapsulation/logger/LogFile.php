<?php

require_once 'File.php';

class LogFile extends File
{
    protected string $username = ''; //obligé de mettre une valeur par défaut
    protected string $ipAdress = ''; //en mettant protected, ça oblige à utiliser getUsername et getIpAdress

    public function write(string $content)
    {
        if ($this->getUsername() !== '' && $this->getIpAdress() !== '') {
            $content = '['.$this->getUsername().'-'.$this->getIpAdress().'] '.$content;
        }

        return parent::write($content.PHP_EOL);
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    //public function setUsername(string $username): void//utilisation sans fluent setter bcp de $file dans index.php
    //{
    // $this->username = $username;
    //}

    public function setUsername(string $username): self // self est mieux que LogFile
    {
        $this->username = $username;

        return $this; //utilisation des fluent setter
    }

    private function getIpAdress(): string
    {
        return $this->ipAdress;
    }

    //public function setIpAdress(string $ipAdress): void ////utilisation sans fluent setter bcp de $file dans index.php
    //{
    // $this->ipAdress = $ipAdress;
    //}

    public function setIpAdress(string $ipAdress): self // self est mieux que LogFile
    {
        $this->ipAdress = $ipAdress;

        return $this; //utilisation des fluent setter
    }
}

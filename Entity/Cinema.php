<?php

class Cinema
{
    private $idCinema;
    private $nomCinema;
    private $adresseCinema;
    private $codePostalCinema;
    private $villeCinema;
    private $latitudeCinema;
    private $longitudeCinema;
    private $imageCinema;
    
    public function Categorie($unId, $unNom)
    {
        $this->idCinema = $unId;
        $this->nomCinema = $unNom;
    }
    public function getId()
    {
        return $this->idCinema;
    }
    public function getNom()
    {
        return $this->nomCinema;
    }
    public function getAdresse()
    {
        return $this->adresseCinema;
    }
    public function getPostal()
    {
        return $this->codePostalCinema;
    }
    public function getVille()
    {
        return $this->villeCinema;
    }
    public function getLatitude()
    {
        return $this->latitudeCinema;
    }
    public function getLongitude()
    {
        return $this->longitudeCinema;
    }
    public function getImageCinema()
    {
        return $this->imageCinema;
    }
}

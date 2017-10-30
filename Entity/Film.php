<?php

class Film
{
    private $idFilm;
    private $nomFilm;
    private $imageFilm;
    private $genreFilm;
    private $nbVotes;
    private $totalVotes;
    
    public function Categorie($unId, $unNom)
    {
        $this->idFilm = $unId;
        $this->nomFilm = $unNom;
    }
    public function getId()
    {
        return $this->idFilm;
    }
    public function getNom()
    {
        return $this->nomFilm;
    }
    public function getImageFilm()
    {
        return $this->imageFilm;
    }
    public function getGenreFilm()
    {
        return $this->genreFilm;
    }
    public function getNbVotes()
    {
        return $this->nbVotes;
    }
    public function getTotalVotes()
    {
        return $this->totalVotes;
    }
}

<?php

class DaoFilm extends PDO implements IService
{
    private $cnx;
    
    public function DaoFilm()
    {
        $this->cnx = Bdd::getCnx();
    }
    public function FindAll() {
        $sql = $this->cnx->prepare("select * from film");
        $sql->execute();
        $lesFilms =  $sql->fetchAll(PDO::FETCH_ASSOC);
        $tabFilms = array();
        foreach ($lesFilms as $film)
        {
            array_push($tabFilms, new Film($film['codeFilm'], $film['nomFilm'],
                                           $film['imageFilm'], $film['genreFilm'],
                                           $film['nbVotes'], $film['totalVotes']));
        }
        return $tabFilms;
    }
    public function FindById($id) {
        ;
    }
    public function Create($params) {
        ;
    }
    public function Read() {
        
    }
    public function Delete() {
        
    }
    public function UpDate() {
        
    }
    public function FindByOne($critere) {
        
    }
    public function FindLast() { 
    }
}

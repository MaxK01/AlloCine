<?php

class DaoCinema extends PDO implements IService
{
    private $cnx;
    
    public function DaoCinema()
    {
        $this->cnx = Bdd::getCnx();
    }
    public function FindAll() {
        $sql = $this->cnx->prepare("select * from cinema");
        $sql->execute();
        $lesCinemas =  $sql->fetchAll(PDO::FETCH_ASSOC);
        $tabCinemas = array();
        foreach ($lesCinemas as $cinema)
        {
            array_push($tabCinemas, new Cinema($cinema['codeCine'], $cinema['nomCine'],
                                                  $cinema['adresseCine'], $cinema[codePostalCine],
                                                  $cinema['villeCine'], $cinema[latitudeCine],
                                                  $cinema[longitudeCine], $cinema[imageCine]));
        }
        return $tabCinemas;
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

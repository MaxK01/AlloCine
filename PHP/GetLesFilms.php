<?php //

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    $code = $_GET['codeCinema'];
    
        $host = "mysql:dbname=allocine;host=localhost";
        $user = "root";
        $mdp="";
        
        $cnx = new PDO($host,$user,$mdp);
        
        $sql = $cnx->prepare("select codeFilm, nomFilm, imageFilm from projeter,film where codeFilm = numFilm and numCinema ='".$code."'");
        
        $sql->execute();
        $lesFilms = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($lesFilms as $film){
            
            echo "<p>".$film['codeFilm']."</p>"; 
            echo "<p>".$film['nomFilm']."</p>";
            echo "<img src='".$film['imageFilm']."' height='80' width='80'>";
            
       }
        
//        include '../Tools/global.php';
//        
//        $daoFilms = new DaoFilm();
//        $lesFilms = $daoFilms->FindByOne($_GET['codeFilm']);
//        foreach ($lesFilms as $films)
//        {
//            echo "<p>".$films->getId()." - ".$films->getNom()."</p>";
//        }
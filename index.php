<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    //include '..Tools/global.php';
    //include '../Tools/Bdd.php';
    
    $bdd = new Bdd();
    $daoC = new DaoCinema();
    $daoF = new DaoFilm();
    //$lesCinemas = $daoC->FindAll();
    $lesFilms = $daoF->FindAll();
    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <title>TESTGITHUB</title>
        
        <script type="text/javascript" src="lesFonctions.js"></script>
        <script type="text/javascript" src="jquery-3.1.1.js"></script>
        
    </head>
    <body>
        <?php
        // put your code here

        
        $host = "mysql:dbname=allocine;host=localhost";
        $user = "root";
        $mdp="";
        
        $cnx = new PDO($host,$user,$mdp);
        
        $sql = Bdd()->prepare("select codeCine, nomCine, imageCine from cinema");
        
        $sql->execute();
        $lesCinemas = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($lesCinemas as $cine)
            {
                echo"<p>".$cine['codeCine']."</p>";
                echo"<p>".$cine['nomCine']."</p>";
                echo"<img onclick=AfficherLesFilms('".$cine['codeCine']."') src='".$cine['imageCine']."' height='80' width='80'>";
            }   
        
        ?>
        
               
        <div id="divFilms"></div>
        <div id="divActeurs"></div>
    
        
    </body>
</html>

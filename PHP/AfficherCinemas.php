<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AfficherCinemas
 *
 * @author maxme
 */
//class AfficherCinemas {
//    //put your code here
//}

include '../Tools/global.php';
        
        $daoCinemas = new DaoCinema();
        $lesCinemas = $daoCinemas->FindByOne($_GET['codeCine']);
        foreach ($lesCinemas as $Cinemas)
        {
            echo "<p>".$Cinemas->getId()." - ".$Cinemas->getNom()."</p>";
        }
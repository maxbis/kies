<?php
include "database.php";
session_start();
if ($_SESSION["rol"] == "leerling") {
        $sterren = $_POST["aantalSterren"];
        $leerlingId = $_SESSION["leerlingId"];
        $levelId = $_SESSION["level"];
        
        $sql = "update leerling_level 
                set sterren = $sterren,
                gereed = 1
                where leerlingId=$leerlingId 
                and levelId = $levelId";
        $conn->exec($sql);
} 


?>
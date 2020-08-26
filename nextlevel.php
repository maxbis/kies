<?php
//haal volgende level op
session_start();
if ($_SESSION["rol"] == "docent") {
 echo "<script type='text/javascript'>window.location.href = 'menu.php';</script>";
    
} else {
        $sql = "select * from level 
        inner join level_type on level.id = level_type.levelId 
            where level.id > ". $_SESSION["level"] . " 
            and type = " . $_SESSION["type"] ."
            order by level.id" ;
        $result = $conn->query($sql);
        $aantalRijen = $result->rowCount();
        if ($aantalRijen >= 1) {
            //haal de volgende rij (=level) op.
            $row = $result->fetch();
            $_SESSION["level"] = $row["levelId"];
            echo "<script type='text/javascript'>window.location.href = '" . $row["bestandsnaam"].  ".php';</script>";
            
        } else {
             echo "<script type='text/javascript'>window.location.href = 'einde.php';</script>";
        }         
}
?>
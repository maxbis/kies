<?php 
session_start();
include "database.php";
    
if (!isset($_SESSION["rol"])) {
     echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";

} else {
    if (isset($_POST["nextLevel"])) {
        include "nextlevel.php";
    }
    if ($_SESSION["rol"] == "leerling") { 
        include "insertLeerlingLevel.php";
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <link rel="stylesheet" type="text/css" href="style/linksRechts.css">
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="content">
    <?php include "header.php"; ?>
    <main>
        <div id=uitleg>
        <h1>Hard- of software</h1>
        <p>Er komt straks 10 keer een logo in beeld. Dit kan hardware of software zijn. Klik op de juiste button. Een fout kost je een ster.</p>
        <p>&nbsp;</p>
        <button id=start onclick="start()">start spel</button>
        </div>
    <div id=container>
        <?php include "cijfer.php";?>
        <div id=links onclick="sorteer('hardware')">hardware</div>
        <div id=midden></div>
        <div id=rechts onclick="sorteer('software')">software</div>
        
    </div>
    <div id=resultaat></div>
    <script type="text/javascript" src="js/updateSterren.js"></script>
    <script src="js/linksRechts.js"> </script>
        </main>
    </div>
</body>
</html>

<?php
} 
?>
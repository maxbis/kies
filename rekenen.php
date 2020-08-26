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
        <link rel="stylesheet" type="text/css" href="style/rekenen.css">
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
    <body>
    <div class="content">
    <?php include "header.php"; ?>
    <main>
    <div id=uitleg><h1>Rekenen</h1>
    <p>Je krijgt nu 3 verschillende rekenopdrachten. Bij de eerste opdracht moet je de som uitrekenen. Bij opdracht 2 
    krijg je 3 keer een figuur te zien en moet je het aantal vierkanten tellen. Bij opdracht 3 moet je het volgende
    getal in de cijferreeks bepalen. Rechts is een kladblaadje wat je als hulpmiddel kan gebruiken.</p>
    <p>&nbsp;</p>
        <button id="start" onclick = "start()">Start spel</button>
    </div>
    <div id=container>
          <?php include "cijfer.php";?>
      <div id=links>
        <div id=links1>
            <?php include "rekenen1.html";?>
        </div>
        <div id=links2>
                <?php include "rekenen2.html";?>
        </div>
        <div id=links3>
            <?php include "rekenen3.html";?>
        </div>
        </div>
        <div id=rechts>
            <p>Kladpapier</p>
            <textarea id="kladpapier" rows=15 cols=50></textarea>
            
        </div>
    </div>
<div id="resultaat"></div>

<script src="js/updateSterren.js"></script>
<script src="js/rekenen.js">

</script>
    </main>
 </div>
</body>
</html>

<?php }?>
<?php 
session_start();
include "database.php";
    
if (!isset($_SESSION["rol"])) {
     echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";

} else {
    if ($_SESSION["rol"] == "leerling") { 
        include "insertLeerlingLevel.php";
        
        if (isset($_POST["nextLevel"])) {
            include "nextlevel.php";
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Schuifpuzzel</title>
    <link rel="stylesheet" type="text/css" href="style/header.css">
    <link rel="stylesheet" type="text/css" href="style/schuifpuzzel.css">
    <link rel="stylesheet" type="text/css" href="style/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/updateSterren.js"></script>
    <script src="js/schuifpuzzel.js"></script>
</head>

<body onload="init();">
    <div class="content">
    <?php include "header.php"; ?>

    <main>
    <div id=uitleg>
        <h1>Schuifpuzzel</h1>
        <p>Hieronder zie je een foto. Als je op de foto klikt wordt dit een schuifpuzzel. 
        Bekijk de foto eerst goed. Als je op start puzzel klikt krijg je de foto in stukjes te zien.
        Maak zo snel mogelijk de puzzel. 
        Let op je hebt maar een beperkte tijd. Los je de puzzel niet op binnen de tijd, dan kost je dat een ster.
        Puzzel 2 en 3 zijn meer stukjes maar je hebt dan ook meer tijd.</p> 
    </div>
    <div id=container>
        <?php include "cijfer.php";?>
        <div id=links>
            <canvas id="canvas"></canvas>
        </div>
        <div id=rechts>
            <div>nog <span id= "klok">??</span> seconden </div>
            <div id="resultaat"></div>
            <button id=volgende onclick="nextPuzzle()" disabled>volgende</button>
            <button id=opnieuw onclick="samePuzzle()" disabled>opnieuw</button>
        </div>
    </div>
    
     </main>
    </div>
</body>

</html>

<?php } ?>
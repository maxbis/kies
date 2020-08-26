<?php 
session_start();
include "database.php";
if (!isset($_SESSION["rol"])) {
     echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";

} else {
    if ($_SESSION["rol"] == "leerling") { 
        include "insertLeerlingLevel.php";
    }
    if (isset($_POST["nextLevel"])) {
        include "nextlevel.php";
    }
?>

<!DOCTYPE = html>
<html>
<head>
  <title>Schuifpuzzel</title>
    <link rel="stylesheet" type="text/css" href="style/header.css">
    <link rel="stylesheet" type="text/css" href="style/schuifpuzzel.css">
    <link rel="stylesheet" type="text/css" href="style/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/updateSterren.js"></script>
    <script src="js/schuifpuzzelA.js"></script>
<body onload="">
    <div class="content">
    <?php include "header.php"; ?>
    <main>
    <div id=uitleg>
        <h1>Schuifpuzzel</h1>
        <p></p>Hieronder zie je een foto. Als je op de foto klikt wordt dit een schuifpuzzel. 
        Bekijk de foto eerst goed. Als je op start puzzel klikt krijg je de foto in stukjes te zien.
        Maak zo snel mogelijk de puzzel. 
        Let op je hebt maar een beperkte tijd. Los je de puzzel niet op binnen de tijd, dan kost je dat 2 sterren. 
        Heb je nog maar 10 seconden over, dan kost je het 1 ster.
        Er komen 3 verschillende afbeeldingen. </p>
        <p>&nbsp;</p>
        <button name="nmbtnStart" id="puzzel0" onclick="startPicture()" >Start</button>
    </div>
    <div id="container">
        <?php include "cijfer.php";?>
        <div id=links>
        <img id="picture0" width="512" height="512" src = "img/kv-NAO.png">
        <img id="picture1" width="512" height="512" src = "img/amstelland.jpg">
        <img id="picture2" width="512" height="512" src = "img/appdev.jpg">
        <canvas id="myCanvas0" Onclick= "Schuif(event)" width="512" height="512" style="border:1px solid #000000;">
        </canvas>
        <canvas id="myCanvas1" Onclick= "Schuif(event)" width="512" height="512" style="border:1px solid #000000;">
        </canvas>
        <canvas id="myCanvas2" Onclick= "Schuif(event)" width="512" height="512" style="border:1px solid #000000;">
        </canvas>
      </div>
              <div id="rechts">
            <div>nog <span id= "klok">??</span> seconden </div>
            <div id="resultaat"></div>
        <div class="buttonRow">
        <button name="nmbtnStart" id="schud" onclick="StartPuzzel()" disabled>Schud</button>
        <button name="nmbtnStart" id="puzzel1"  onclick="setPicture(1)">volgende</button>
        <button name="nmbtnStart" id="puzzel2"  onclick="setPicture(2)">volgende</button>
        </div>
     </div>
    </div>
  </main>
</div>
    </body>
</html>

<?php } ?>
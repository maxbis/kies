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
        <link rel="stylesheet" type="text/css" href="style/geheimecode.css">
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
    <body>
    <div class="content">
    <?php include "header.php"; ?>
    <main>
    <div id=uitleg>
        <h1>Geheime code</h1>
    <p>Kan jij de code kraken? Gebruik de linker tabel om de code te ontcijferen.</p>
    <p>&nbsp;</p>
        <button id = "start" onclick="start()">Start</button>
    </div>
    <div id=container>
    <?php include "cijfer.php";?>
    <div id=links>
    <table id="sleutel">
        <tr><th></th><th>A</th><th>B</th><th>C</th><th>D</th><th>E</th></tr>
        <tr><th>1</th><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td></tr>
        <tr><th>2</th><td>f</td><td>g</td><td>h</td><td>i</td><td>j</td></tr>
        <tr><th>3</th><td>k</td><td>l</td><td>m</td><td>n</td><td>o</td></tr>
        <tr><th>4</th><td>p</td><td>r</td><td>s</td><td>t</td><td>u</td></tr>
        <tr><th>5</th><td>v</td><td>w</td><td>x</td><td>y</td><td>z</td></tr>
    </table>
    </div>
    <div id=rechts>
       Let op de eerste letter van elk woord staat onder start!
    <table>
        <tr><th>start</th><th colspan=5 >volgende letters</th></tr>
        <tr><td>D5</td>
        <td><img src="img/pijlU.jpg"><img src="img/pijlU.jpg"><img src="img/pijlR.jpg"></td>
        <td><img src="img/pijlD.jpg"></td>
        </tr>
        <tr><td>A1</td>
        <td><img src="img/pijlD.jpg"><img src="img/pijlD.jpg"><img src="img/pijlD.jpg"><img src="img/pijlR.jpg"></td>
        <td><img src="img/pijlR.jpg"><img src="img/pijlR.jpg"><img src="img/pijlR.jpg"><img src="img/pijlU.jpg"><img src="img/pijlU.jpg"><img src="img/pijlU.jpg"></td>
        </tr>
        <tr><td>A1</td>
        <td><img src="img/pijlD.jpg"><img src="img/pijlD.jpg"><img src="img/pijlR.jpg"></td>
        <td><img src="img/pijlR.jpg"></td>
        <td><img src="img/pijlR.jpg"><img src="img/pijlR.jpg"></td>
        <td><img src="img/pijlD.jpg"><img src="img/pijlL.jpg"><img src="img/pijlL.jpg"></td>
        <td><img src="img/pijlR.jpg"></td>
        </tr>
        <tr><td>D4</td>
        <td><img src="img/pijlU.jpg"><img src="img/pijlU.jpg"><img src="img/pijlL.jpg"></td>
        <td><img src="img/pijlU.jpg"><img src="img/pijlR.jpg"><img src="img/pijlR.jpg"></td>
        <td><img src="img/pijlD.jpg"><img src="img/pijlL.jpg"><img src="img/pijlL.jpg"><img src="img/pijlD.jpg"><img src="img/pijlD.jpg"><img src="img/pijlL.jpg"></td>
        <td><img src="img/pijlU.jpg"><img src="img/pijlR.jpg"><img src="img/pijlU.jpg"><img src="img/pijlR.jpg"><img src="img/pijlU.jpg"><img src="img/pijlR.jpg"></td>
        </tr>
    </table>
    <p>Oplossing</p>
        <input id="woord1" autofocus>
        <input id="woord2">
        <input id="woord3">
        <input id="woord4">
        <button id="checkIt" onclick="controleerCode()">Check it</button>
        <div id=resultaat></div>
    </div>


    </div>
    <script src="js/updateSterren.js"></script>
    <script src="js/geheimecode.js"></script>
    </body>
    </main>
 </div>
</html>
<?php
}
?>
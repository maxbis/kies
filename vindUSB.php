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
        <meta charset="UTF-8">
        <title> </title>
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link rel="stylesheet" type="text/css" href="style/vindUSB.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body> 
    <div class="content">
    <?php include "header.php"; ?>
    <main>
    <div id=uitleg>
    <h1>Vind USB</h1>
    <p></p>Je hebt alle puzzels opgelost. gefeliciteerd. Bij elke puzzel heb je een cijfer gekregen. 
    Je krijgt van ons ook nog een aantal cijfers.</p>
    <div id=container>
    <div id="links">
    De code vormt een GPS code. Een GPS code bestaat heeft de volgende opmaak
    N52°22'41.88" E4°54'1.943" is bijvoorbeeld Amsterdam Centraal Station
    <?php
    //haal alle cijferscodes op
        $sql = "select * from level order by id";
        $result = $conn->query($sql);

        foreach ($result as $row) {
            switch ($row["id"]) {
                case 1: $A = $row["cijfercode"];
                case 2: $B = $row["cijfercode"];
                case 3: $C = $row["cijfercode"];
                case 4: $D = $row["cijfercode"];
                case 5: $E = $row["cijfercode"];
                case 6: $F = $row["cijfercode"];
                case 7: $G = $row["cijfercode"];
                case 8: $H = $row["cijfercode"];
            }
        }
        
    ?><div id="tableDiv">
    <table>
        <tr><th>letter</th><th>cijfer</th></tr>
        <tr><td>A</td><td><?php echo $A;?></td></tr>
        <tr><td>B</td><td><?php echo $B;?></td></tr>
        <tr><td>C</td><td><?php echo $C;?></td></tr>
        <tr><td>D</td><td><?php echo $D;?></td></tr>
        <tr><td>E</td><td><?php echo $E;?></td></tr>
        <tr><td>F</td><td><?php echo $F;?></td></tr>
        <tr><td>G</td><td><?php echo $G;?></td></tr>
        <tr><td>H</td><td><?php echo $H;?></td></tr>
    </table>
    </div>
    </div>
    <div id=rechts>
    Gebruik de tabel hiernaast om te berekenen waar de USB stick ligt.<br>
    De USB stick ligt op: 
    <p><b>N</b> CA° G(G+B)' (E*A).A"</p>
    <p>N<input id=Ngraden max=99 type=number>°<input id=Nmin max=99 type=number>'<input id=Nsec>"</p>
    <p><b>E</b> D° (A+F)(D-F-G)' (B-C)(E+G).A"</p>
    <p>E<input id=Egraden max=9 type=number>°<input id=Emin max=99 type=number>'<input id=Esec>"</p>
    <br>Vergeet de punt niet in laatste twee velden
    <input type=text id="GPS">
    <button onclick="kopieerTekst()">kopieer</button></p>
    Kopieer de code en ga naar <a href="http://maps.google.nl" target="_blank">google maps</a> om te de USB stick te vinden.
    <div>Wat is het adres wat bij deze code hoort? 
        <p>straat <input id=straat></p>
        <p>huisnummer <input id=huisnummer></p>
        <p>postcode <input id=postcode></p>
        <p>plaats <input id=plaats></p>
        <button onclick="checkAdres()">controleer</button>
    </div>
    <div id=resultaat></div>
    <form method="POST">
        <input type=submit value="Naar het einde" id="nextLevel" name="nextLevel">
    </form>
    </div>
    </div>
<script src="js/updateSterren.js"></script>
<script src="js/vindUSB.js"></script>
        </main>
    </div>
</body>
</html>

<?php

} ?>

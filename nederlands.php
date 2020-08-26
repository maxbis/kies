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
        <title>Spel 2</title>
        <link rel="stylesheet" type="text/css" href="style/nederlands.css">
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
    <body>
    <div class="content">
    <?php include "header.php"; ?>
    <main>

    <div id=uitleg><h1>Nederlands</h1>
    <p>In de onderstaande tekst zitten 10 fouten. Zoek deze fouten en verbeter ze.</p>
    </div>
    <div id=container>
        <?php include "cijfer.php";?>

    <div id=links>    
<h2>Mysterie rond Instagram-ei opgelost</h2>
<span id=tekst><p>De mysterie rond het 'Instagram-ei', dat vorige maand online kwam en de meest geliketete Instagram-foto werd, is opgelost. Bedenker ervan is Chris Godfrey, een 29 jarige man uit Londen. Hij is werkzaam in de reclameindustrie.</p>
<p>Godfrey kwam op het idee doordat hij had gezien dat een foto van beroemdheid Kylie Jenner de meeste likes op Instagram had, zegt hij in The New York Times. 'Kan iets universeels en simpels als een ei goed genoeg zijn om dat record te breken?', vroeg hij zich af.</p>
<p>Negen dagen later was dat gelukt. Inmiddels heeft de foto 52 miljoen likes - die van jenner heeft er 19 miljoen.</p>
<p>Veel geruchten gingen de ronde over de oorzaak van de populariteit van het ei. Zo zouden influencers betaalt zijn om het onder de aandacht te brengen. Onzin, zegt Godfrey. De groei van het aantal likes ging 'organic'. </p>
<p>Godfrey zet 'Eugene', zoals het ei door fans genoemd word, in om bewustwording rond geestelijke gezondheid te vergrooten. Op Instagram is een filmpje verschenen waarin het ei openbreekt 'door de druk van sociale media'. 'Worstel je ook', zegt het ei, 'praat dan met iemand.'</p>
</span>

</div>
<div id=rechts>
    <ol>
        <li><input id="woord1a" autofocus> moet veranderd worden in <input id="woord1b">
        </li>
        <li><input id="woord2a"> moet veranderd worden in <input id="woord2b">
        </li>
         <li><input id="woord3a"> moet veranderd worden in <input id="woord3b">
        </li>
        <li><input id="woord4a"> moet veranderd worden in <input id="woord4b">
        </li>
        <li><input id="woord5a"> moet veranderd worden in <input id="woord5b">
        </li>
        <li><input id="woord6a"> moet veranderd worden in <input id="woord6b">
        </li>
        <li><input id="woord7a"> moet veranderd worden in <input id="woord7b">
        </li>
        <li><input id="woord8a"> moet veranderd worden in <input id="woord8b">
        </li>
        <li><input id="woord9a"> moet veranderd worden in <input id="woord9b">
        </li>
        <li><input id="woord10a"> moet veranderd worden in <input id="woord10b">
        </li>
    </ol>
    
    <button id="controleer" onclick= "controleren()">Check it</button>
    </p><div id="resultaat"></div>
    <p id=extra> Wil je extra hulp? Dit kost je wel 1 ster. <button onclick=extraHulp()>Extra hulp</button>
    </p>
    <p id=opgeven>Vind je dit te moeilijk dan kan je het opgeven. <button onclick= "opgeven()">Opgeven</button>
    </p>

</div>
<script type="text/javascript" src="js/updateSterren.js"></script>
<script src="js/nederlands.js"></script>
    </main>
 </div>
</body>
</html>

<?php } ?>
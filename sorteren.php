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
        <link rel="stylesheet" type="text/css" href="style/sorteren.css">
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
    <div class="content">
    <?php include "header.php"; ?>
    <main>
    <div id=uitleg>
        <h1>Sorteren</h1>
    <p>Er worden straks 48 kaarten getoond. Op elke kaart staan 1, 2, 3 of 4 symbolen in rood, groen,  
    blauw of zwart.
    In de opdracht staat welke kaarten je moet aanklikken. Lees de opdracht goed. Er zijn 4 opdrachten. 
    Let op: elke keer worden de kaarten opnieuw geschud.</p>
    <p>&nbsp;</p>
    <button id =start onclick="start()">Start</button>
    </div>
  
    <div id="container">
        <?php include "cijfer.php";?>
      <div id=links>
    <table>
        <tr>
            <td><div class=kaart id=kaart1 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart2 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart3 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart4 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart5 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart6 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart7 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart8 onclick="verander(this)"></div></td>
        </tr>
        <tr>
            <td><div class=kaart id=kaart9 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart10 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart11 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart12 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart13 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart14 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart15 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart16 onclick="verander(this)"></div></td>
        </tr>
        <tr>
            <td><div class=kaart id=kaart17 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart18 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart19 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart20 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart21 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart22 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart23 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart24 onclick="verander(this)"></div></td>
        </tr>
        <tr>
            <td><div class=kaart id=kaart25 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart26 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart27 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart28 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart29 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart30 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart31 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart32 onclick="verander(this)"></div></td>
        </tr>
        <tr>
            <td><div class=kaart id=kaart33 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart34 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart35 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart36 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart37 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart38 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart39 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart40 onclick="verander(this)"></div></td>
        </tr>
        <tr>
            <td><div class=kaart id=kaart41 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart42 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart43 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart44 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart45 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart46 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart47 onclick="verander(this)"></div></td>
            <td><div class=kaart id=kaart48 onclick="verander(this)"></div></td>
        </tr>
    </table>
    </div>
    <div id=rechts>
        <div id="opdracht1">klik alle kaarten met 1 of meerdere rode symbolen
        <button onclick="opdracht1()">check opdracht 1</button>
        </div>
        <div id="opdracht2">klik alle kaarten met 1 blauw symbool
        <button onclick="opdracht2()">check opdracht 2</button>
        </div>
        <div id="opdracht3">klik alle kaarten met groene symbolen en alle kaarten met 2 cirkels
        <button onclick="opdracht3()">check opdracht 3</button>
        </div>
        <div id="opdracht4">klik alle zwarte kaarten die geen 3 symbolen hebben
        <button onclick="opdracht4()">check opdracht 4</button>
        </div>
        
        <div id=resultaat onclick="verander(this)"></div>
    </div>
    </div>
    <script src="js/updateSterren.js"></script>
    <script src="js/sorteren.js"></script>

    </main>
 </div>
</body>
</html>
<?php 
}
?>
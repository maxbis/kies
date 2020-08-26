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
        <title>doolhof </title>
        <link rel="stylesheet" type="text/css" href="style/doolhof.css">
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
    <body>
    <div class="content">
    <?php include "header.php"; ?>

    <main>
    <h1>Doolhof</h1>
    <p>Je krijgt zo meteen links een doolhof te zien. Je moet het rode blokje naar het groene blokje brengen. 
    Dit doe je door de juiste pijltjes te slepen naar het rechterveld. Zet in elk hokje 1 pijltje. 
    Een stap is gelijk aan 1 hokje. Ben je klaar, klik dan op Check oplossing.
    Heb je een foutje gemaakt klik dan opnieuw beginnen. Ontdekt de computer een fout, dan kost je dat een ster. 
    Je krijgt maximaal 5 sterren voor deze opdracht. Als het niet lukt, kan je opgeven, dan krijg je 0 sterren.
    <p>De eerste stap zet je in het eerste hokje, de volgende stap in het hokje daarnaast enzovoort. 
</p>Hieronder staat een voorbeeld. Druk op oplossing om de oplossing te zien.
    <div id="voorbeeld">
        <table>
        <tr>
            <td id=vb1><div id="vbRobot"></div></td>
            <td id=vb5></td>
            <td id=vb6></td>
        <tr>
        <tr>
            <td id=vb2></td>
            <td id=vb3></td>
            <td id=vb4><div id="vbUitgang"></div></td>
        <tr>
    </table>
    <button onclick="voorbeeldOplossing()">oplossing</button>
    <table id=antwoord>
        <tr>
            <td class="oplos" ><img id="vbOplos1" src="img/leeg.jpg"  width="48px" heigth="48px"></td>
            <td class="oplos" ><img id="vbOplos2" src="img/leeg.jpg"  width="48px" heigth="48px"></td>
            <td class="oplos" ><img id="vbOplos3" src="img/leeg.jpg"  width="48px" heigth="48px"></td>
            <td class="oplos">  </td>
        </tr>
    </table>   


</div>

<div><br>Er komen 3 doolhoven die steeds wat lastiger worden.</div>
    <p>&nbsp;</p>
    <button id="start" onclick = maak(1)>Start spel</button>
    
        <div id=container>
        <?php include "cijfer.php";?>
        <div id=links>
        <table>
        <tr>
            <td id=r1k1></td>
            <td id=r1k2></td>
            <td id=r1k3></td>
            <td id=r1k4></td>
            <td id=r1k5></td>
        </tr>
        <tr>
            <td id=r2k1></td>
            <td id=r2k2></td>
            <td id=r2k3></td>
            <td id=r2k4></td>
            <td id=r2k5></td>
        </tr>
        <tr>
            <td id=r3k1></td>
            <td id=r3k2></td>
            <td id=r3k3></td>
            <td id=r3k4></td>
            <td id=r3k5></td>
        </tr>
        <tr>
            <td id=r4k1></td>
            <td id=r4k2></td>
            <td id=r4k3></td>
            <td id=r4k4></td>
            <td id=r4k5></td>
        </tr>
        <tr>
            <td id=r5k1></td>
            <td id=r5k2></td>
            <td id=r5k3></td>
            <td id=r5k4></td>
            <td id=r5k5></td>
        </tr>
        
    </table>
    </div>
    <div id=rechts>
        <div id="resultaat"></div>
        
<table id=antwoord>
    <tr>
        <td class="oplos" id="oplos1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos5" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
    </tr>
    <tr>
        <td class="oplos" id="oplos6" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos7" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos8" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos9" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos10" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
    </tr>
    <tr>
        <td class="oplos" id="oplos11" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos12" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos13" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos14" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos15" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
    </tr>
    <tr>
        <td class="oplos" id="oplos16" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos17" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos18" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos19" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
        <td class="oplos" id="oplos20" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
    </tr>
</table>

<img id="drag1" src="img/pijlU.jpg" draggable="true" onclick="pijl('U')" ondragstart="drag(event)" width="48px" heigth="48px">
<img id="drag2" src="img/pijlD.jpg" draggable="true" onclick="pijl('D')" ondragstart="drag(event)" width="50px" heigth="50px">
<img id="drag3" src="img/pijlL.jpg" draggable="true" onclick="pijl('L')" ondragstart="drag(event)" width="50px" heigth="50px">
<img id="drag4" src="img/pijlR.jpg" draggable="true" onclick="pijl('R')" ondragstart="drag(event)" width="50px" heigth="50px">

    <div class="buttonRow">
        <button id="oplossing" onclick="oplossing()" disabled>Check oplossing</button>
        <button id="opnieuw" onclick="opnieuw()" disabled>Opnieuw beginnen</button>
        <button id="opgeven" onclick="opgeven()" disabled>Opgeven</button>
    </div>
</div>
</div>

<script src="js/updateSterren.js"></script>
<script src="js/doolhof.js">

</script>
        </main>
    </div>
</body>
</html>

<?php }?>
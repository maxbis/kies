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
        <title>stoplicht </title>
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="style/stoplicht.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
   <div class="content">
    <?php include "header.php"; ?>

    <main>
    <div id=uitleg>
        <h1>Stoplicht</h1>
    <p>Hieronder staan 2 straten met 4 stoplichten. In de komende opdrachten ga je de stoplichten aan en uitzetten.
    De opdrachten worden steeds een stukje moeilijker. Lees de opdrachten goed!</p> 
    <p>&nbsp;</p>
    <button id=start onclick="start()">Start</button>
    </div>

    <div id=container>
      <?php include "cijfer.php";?>
    <div id=links>
    <table id=kruising>
    <tr>
        <td ></td>
        <td class=straat>Stoplicht 1
            <table class=stoplicht id=stoplicht1>
                <tr><td><button class="stoplichtLamp rood" id="S1Rood"></button></td></tr>
                <tr><td><button class="stoplichtLamp oranje" id="S1Oranje"></button></td></tr>
                <tr><td><button class="stoplichtLamp groen" id="S1Groen"></button></td></tr>
            </table>
        </td>
        <td id=straatnaamKolom class = straatnaam rowspan=4><span id=straatnaam1>SteveJobssingel</span></td>
        <td></td>
    </tr>
    <tr><td class=straatnaam colspan=4>Bill Gatesbaan</td></tr>
    <tr>
        <td class=straat class=rechts>Stoplicht 4
        <table class=stoplicht id=stoplicht4>
            <tr><td><button class="stoplichtLamp rood" id="S4Rood"></button></td></tr>
            <tr><td><button class="stoplichtLamp oranje" id="S4Oranje"></button></td></tr>
            <tr><td><button class="stoplichtLamp groen" id="S4Groen"></button></td></tr>
        </table>
        </td>
    <td class=straat></td>
    <td class=straat>Stoplicht 2
        <table class=stoplicht id=stoplicht2>
            <tr><td><button class="stoplichtLamp rood" id="S2Rood"></button></td></tr>
            <tr><td><button class="stoplichtLamp oranje" id="S2Oranje"></button></td></tr>
            <tr><td><button class="stoplichtLamp groen" id="S2Groen"></button></td></tr>
        </table></td>
    </tr>
    <tr>
    <td></td>
    <td class=straat>Stoplicht 3
        <table class=stoplicht id=stoplicht3>
            <tr><td><button class="stoplichtLamp rood" id="S3Rood"></button></td></tr>
            <tr><td><button class="stoplichtLamp oranje" id="S3Oranje"></button></td></tr>
            <tr><td><button class="stoplichtLamp groen" id="S3Groen"></button></td></tr>
        </table></td>
    <td></td>
    </tr>
    
    </table>
    </div>
    <div id=rechts>
    <div class=hidden id="opdracht1">
    <h2>Opdracht 1</h2>
    <p></p>Om de stoplichten goed te kunnen bedienen heeft elke lamp in het stoplicht een eigen naam,
    net zoals jij ook een naam hebt.
    De naam van de lamp bestaat uit 2 delen: het nummer van het stoplicht (S1, S2, S3 of S4) en de kleur van de lamp. 
    De rode lamp van stoplicht 1 heeft als naam S1Rood. De oranje lamp van stoplicht 1 is dus S1Oranje. En de groene lamp
    S1Groen.</p>
    <p>&nbsp;</p>
    <div class=opdracht id="opdracht1a"><p>Wat is het naam van de rode lamp van stoplicht 2?</p>
    <input class=antwoord type=text id="antwoord1a" autofocus  >
    <button onclick="opdracht1a()">controleer</button>
    </div>
    <div class="hidden opdracht" id="opdracht1b"><p>Wat is het naam van de groene lamp van stoplicht 3?</p>
    <input class=antwoord type=text id="antwoord1b" autofocus >
    <button onclick="opdracht1b()">controleer</button>
    </div>
    <div class="opdracht hidden" id="opdracht1c" ><p>Wat is het naam van de oranje lamp van stoplicht 4?</p>
    <input class=antwoord type=text id="antwoord1c" autofocus >
    <button onclick="opdracht1c()">controleer</button>
    </div>
    </div>
    <div class="hidden" id="opdracht2">
        <h2>opdracht 2</h2>
        Nu we weten hoe we een stoplicht aan kunnen spreken (we weten nu de naam van elke lamp), kunnen we stoplichten aan en uit gaan zetten
        In de programmeerwereld hebben we het trouwens niet over namen maar over id's. 
        Om de rode lamp van het eerste stoplicht aan te moeten zetten, moeten we 2 dingen doorgeven. Namelijk de id (dus de naam) van 
        de lamp en welke kleur de lamp moet worden. Kleuren geven we altijd door in het 
        engels en met kleine letters.
        <p class=opdracht >Kan jij de rode lamp van het stoplicht 1 aan rood maken? Vul hieronder in het eerste veld
        de id (dus de naam) in en het tweede veld de kleur.</p>
        <div>
        document.getElementById("<input class=antwoord type=text id=invoerId2 autofocus >").style.backgroundColor = "
        <input class=antwoord type=text id=kleur2>";
        <button onclick="opdracht2()">controleer</button>
        </div>
    </div>
    <div class="hidden" id="opdracht3">
        <h2>opdracht 3</h2>
        Nu stopt het verkeer wat uit het noorden komt. We moeten ook zorgen dat het verkeer uit het 
        zuiden stopt. 
        <p class=opdracht>Zet stoplicht 3 ook op rood</p><div>
        document.getElementById("<input class=antwoord type=text id=invoerId3 autofocus >").style.backgroundColor = "
        <input class=antwoord type=text id=kleur3 >";
        <button onclick="opdracht3()">controleer</button>

        </div>
    </div>
    <div class="hidden" id="opdracht4">
        <h2>opdracht 4</h2>
        Nu het verkeer uit het noorden en zuiden stopt kunnen we het verkeer uit het oosten en westen
        laten rijden. 
        <p class=opdracht>Zet deze stoplichten op groen.</p>
        <div>document.getElementById("<input class=antwoord type=text id=invoerId4a autofocus >").style.backgroundColor = "
        <input class=antwoord type=text id=kleur4a>";<br>
        document.getElementById("<input class=antwoord type=text id=invoerId4b>").style.backgroundColor = "
        <input class=antwoord type=text id=kleur4b >";<br>
            <button onclick="opdracht4()">controleer</button>

        </div>
    </div>
    <div class="hidden" id="opdracht5">
        <h2>opdracht 5</h2>
        Om het een stoplicht van rood naar groen te laten springen moet je 2 dingen doen. 
        Je moet eerst het rode licht "uit" doen en dan het groene licht aan doen. 
        Uitdoen doe je door de kleur van een lamp te veranderen naar zwart.
        <p class=opdracht>Verander stoplicht 1 van rood naar groen.</p>
        <div>document.getElementById("<input class=antwoord type=text id=invoerId5a autofocus >").style.backgroundColor = "
        <input class=antwoord type=text id=kleur5a>";<br>
        document.getElementById("<input class=antwoord type=text id=invoerId5b>").style.backgroundColor = "
        <input class=antwoord type=text id=kleur5b>";<br>
        <button onclick="opdracht5()">controleer</button>

        </div>
    </div>
    
    <div class="hidden" id="opdracht6">
        <h2>Opdracht 6</h2>
        Maar ho wacht even dit gaat niet goed. Nu rijdt er verkeer op de Bill Gatesbaan en op de Steve Jobsingel.
        <a href="#" onclick="zetTerug()">Klik hier om dit weer even terug te zetten.</a>
        <div id=opdracht6a class=hidden>
        Okee het verkeer over de Bill Gatesbaan rijdt nu weer lekker door. Maar het verkeer op de Steve Jobssingel
        wil ook graag gaan rijden.
        
            <p class=opdracht>Daarvoor moet je eerst de stoplichten op de Bill Gatesbaan op oranje zetten, dan dezelfde 
            stoplichten op rood en dan de stoplichten op de Steve Jobsingel op groen.
            Als jij de goede volgorde intypt voor stoplicht 2 dan doen wij automatisch stoplicht 4.</p>
            <div>document.getElementById("<input type=text id=invoerId6a autofocus >").style.backgroundColor = "
                <input class=antwoord type=text autofocus id=kleur6a>";<br>
                document.getElementById("<input class=antwoord type=text id=invoerId6b>").style.backgroundColor = "
                <input class=antwoord type=text id=kleur6b>";<br>
                <div>document.getElementById("<input class=antwoord type=text id=invoerId6c>").style.backgroundColor = "
                <input class=antwoord type=text id=kleur6c>";<br>
                document.getElementById("<input class=antwoord type=text id=invoerId6d>").style.backgroundColor = "
                <input class=antwoord type=text id=kleur6d>";<br>
                <button onclick="opdracht6()">controleer</button>
    
            </div>
        </div>
    </div>
    </div>
    <div class="hidden" id="opdracht7">
        <h2>Gelukt</h2>
        <p>Je hebt het verkeer aan het rijden gekregen. En dat heb je eigenlijk gedaan met Javascript. Ga snel door met de volgende opdracht.</p>
        <button onclick="gaVerder()" >klik hier om verder te gaan</button>
        </div>
        <div id=resultaat></div>
    
    </div>
    </div>

</div>
<script src="js/updateSterren.js"></script>
<script src="js/stoplicht.js"></script>
        </main>
    </div>
</body>
</html>

<?php 
}
?>
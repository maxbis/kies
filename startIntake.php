<?php 
session_start();
include "database.php";

if (isset($_POST["start"])) {
    include "nextlevel.php";
}
if (isset($_POST["verder"])) {
    
    $sql = "select * from level 
        where id = ". $_SESSION["level"];
    $result = $conn->query($sql);
    $row = $result->fetch();
    echo "<script type='text/javascript'>window.location.href = '" . $row["bestandsnaam"].  ".php';</script>";

}
if (isset($_POST["einde"])) {
    
    echo "<script type='text/javascript'>window.location.href = 'einde.php';</script>";

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welkom</title>
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <link href="style/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="style/stoplicht.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style/header.css">
        <style>
            
        </style>
    </head>
    <body>
    <?php include "header.php"; ?>
    <div id=containerStart>
        <h1> welkom <?php echo $_SESSION["voornaam"];?>, bij het kennismakingspel</h1>
        <p>Jouw nieuwe SLB-er is een USB stick met informatie over alle studenten verloren. 
        Aan jou de taak om de locatie te achterhalen waar deze USB stick ligt. 
        </p>
        <p>Om de locatie te vinden moet je een aantal opdrachten oplossen. Elke opdracht levert een cijfer op. 
        Samen vormen deze cijfers de oplossing. 
        </p>
        <p>Bij sommige opdracht kan je hulp krijgen. Dit kost je echter wel sterren. Fouten maken kost je 
        natuurlijk ook sterren. Per opdracht krijg je 5 of 10 sterren. Je bent natuurlijk een excellente onderzoeker en 
        wilt al je sterren behouden. Sommige opdrachten hebben een tijdslimiet. 
        Ben je langer bezig dan kost je dat ook sterren. 
        </p>
        <?php
        $sql = "select * from leerling_level 
                where leerlingId= " . $_SESSION["leerlingId"] . "
                and gereed =0";
        $result = $conn->query($sql);
        $aantalRijen = $result->rowCount();
        if ($aantalRijen==1) {
            $row = $result->fetch();
            $_SESSION["level"] = $row["levelId"];
        ?>
        <p>Je hebt al een deel van het spel gedaan. Ga snel verder waar je gebleven was.
        <form method="POST">
            <input id=start type=submit value="Verder" name=verder>
        </form>
        </p>
        
        <?php
    
        } else {
            //is de leerling al klaar?
            $sql = "select max(levelId) as max from leerling_level 
                where leerlingId= " . $_SESSION["leerlingId"];
            $result = $conn->query($sql);
            $row = $result->fetch();
            if ($row["max"] == 9) {
        ?>
        <p>Je hebt het hele spel al gespeeld. Je kan je overzicht nog inzien.
            <form method="POST">
                <input id=start type=submit value="naar het einde" name=einde>
            </form>
        
        <?php
            } else {
        ?>
        Als je op de startknop klikt begint het spel.
        Linksboven zie je het aantal sterren wat je totaal hebt. Rechtsboven zie je hoever je in het spel bent 
        en hoeveel sterren je voor een bepaald spel hebt.
            <form method="POST">
                <input id=start type=submit value="START" name=start>
            </form>
             <?php
            } 
        } 
            ?>
        </div>
    </body>
</html>
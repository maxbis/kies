<?php
include "database.php";
session_start();
session_destroy();
session_start();

if (isset($_POST["start"])) {
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $email = $_POST["email"];
    $dagcode = $_POST["dagcode"];
    // added by valerie, set varaible errorMsg
        $errorMsg = false;
    //end added by valerie
//check of het een docent is
    $sql = "select * from docent where email = '" . $email . "'";
    $result = $conn->query($sql);
    $aantalRijen = $result->rowCount();
    if ($aantalRijen ==1) {
        //het is een docent 
        $_SESSION["rol"] = "docent";
        echo "<script type='text/javascript'>window.location.href = 'menu.php';</script>";

    } else {
        //check dagcode
        $vandaag = date("Y-m-d");
        $sql = "select * from dagcode where datum='" . $vandaag ."'";
        $result = $conn->query($sql);
        $row = $result->fetch();
        $_SESSION["type"] = $row["type"];
        //level type 0 = intake
        //level type 1 = orientatie week
        if ($dagcode == $row["dagcode"]) {
            //check of de leerling al bestaat
            $sql = "select * from leerling 
                    where emailadres = '" . $email . "'
                    and type = " . $_SESSION["type"];
            $result = $conn->query($sql);
            $aantalRijen = $result->rowCount();
            if ($aantalRijen==0) {
                $sql = "insert into leerling (voornaam, achternaam, emailadres, type) 
                        values (:voornaam, :achternaam, :email, :type)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':voornaam', $voornaam);
                $stmt->bindParam(':achternaam', $achternaam);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':type', $_SESSION["type"]);
        
                $stmt->execute();
                $_SESSION["leerlingId"] = $conn->lastInsertId();
                $_SESSION["level"] = 0;
            } else {
                $row = $result->fetch();
                $_SESSION["leerlingId"] = $row["id"];
                
            } 
            $_SESSION["rol"] = "leerling";
            $_SESSION["voornaam"] = $voornaam;
            echo "<script type='text/javascript'>window.location.href = 'startIntake.php';</script>";
    
        } else { 
            $errorMsg = "Dagcode is niet correct!";
        }
    } 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link href="style/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="content">
        <header>
        <div class="logo"><img src="img/logo-kies.png" width="180" height="140">    
        </header>
            <nav></nav>
            <main>
        <div>
        </div>
                <form method="POST" class="form-inlog">
                <fieldset>
                <legend>Inloggen</legend>
                <p>Je gaat een spel spelen wat bestaat uit een aantal onderdelen. Door dit spel leer je wat je allemaal moet kunnen als je begint met de studie applicatieontwikkelaar.
        De onderdelen zijn niet moeilijk maar vragen wel doorzettingsvermogen, het zoeken van oplossingen en een bepaald denkvermogen.</p>
                <input type="text" name="voornaam" placeholder="Voornaam*" required>
                <input type="text" name="achternaam" placeholder="Achternaam*" required>
                <input type="text" name="email" placeholder="E-mail*" required>
                <?php 
                    if($errorMsg != false)
                    {
                    echo "<p class='error'>" . $errorMsg . "</p>";
                    }
                ?>
                <input type="text" name="dagcode" placeholder="Dagcode*" >
                <input type="submit" value="start" name="start" class="right">
                </fieldset>
                </form>
            </main>
        </div>
    </body>
</html>
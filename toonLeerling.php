<?php
session_start();
include "database.php";
if (isset($_POST["logout"])) {
    session_destroy();
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";

}
if (isset($_POST["terug"])) {
    echo "<script type='text/javascript'>window.location.href = 'overzicht.php';</script>";

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Overzicht leerling </title>
        <link rel="stylesheet" type="text/css" href="style/toonLeerling.css">
        <link rel="stylesheet" type="text/css" href="style/styles.css">
    </head>
    <body>
    <div class="content">
           <header>
           <nav>
               <ul>
              <?php if ($_SESSION["rol"] == "docent") { ?>
                 <li><a href="menu.php">menu</a></li>
                <li>
                    <a href="overzicht.php">overzicht studenten</a>
                </li>
                <li>
                    <a href="dagcode.php" class="active">dagcode tonen en genereren</a>
                </li>
                <?php } ?>
                <li><form method="POST"><input type="submit" value="logout" name="logout"></form></li>
            </ul>
           </nav>
        <div class="logo"><img src="img/logo-kies.png" width="180" height="140">
        </header>
    <div id="leegBlok"></div>
    <main>
<?php 
    function toonSterren($aantal, $max) {
        $tekst="";
        for ($i=1;$i<=$aantal;$i++) {
            $tekst .= "<span class=goud>&#9733 </span>";
        }
        for ($i=1;$i<=($max-$aantal);$i++) {
            $tekst .= "&#9734 ";
        }
        echo $tekst;
    }
    $sql = "select * from leerling
    where leerling.id=" . $_SESSION["leerlingId"];
    $result = $conn->query($sql);
    
    $row = $result->fetch();
    $type = $row["type"];
    ?>
    <p>Naam : <?php echo $row["voornaam"].  " " . $row["achternaam"];?></p>
    <p>Emailadres : <?php echo $row["emailadres"];?></p>
    <p>Starttijd : <?php echo $row["starttijd"];?></p>
    <p>Eindtijd : <?php echo $row["eindtijd"];?></p>
    <?php
        $sql = "select * from leerling_level
            inner join leerling on leerling.id=leerlingId
            inner join level on level.id = levelId
            where leerling.id=" . $_SESSION["leerlingId"];
            $result = $conn->query($sql);
    ?>
    <p>&nbsp;</p>
    <div>
           <table class="tabel-overzicht" border="0" width="100%">
            <tr><th>Level</th><th>Titel</th><th>Aantal sterren</th><th>Status</th></tr>
        <?php
            foreach ($result as $row) {
        ?>
            <tr>
                <td><?php echo $row["levelId"];?></td>
                <td><?php echo $row["titel"]?></td>
                <td><?php echo $row["sterren"] . " van de " . $row["aantalSterren"]; ?></td>
                
                <td><?php if($row["gereed"] ==1) {
                        echo "afgerond"; 
                        } else { 
                        echo "nog bezig";
                        } ?></td>
            </tr>
        <?php 
            }
        ?>
        </table>
            <?php
            // toon sterren per competentie
            $sql = "SELECT competentie.omschrijving AS omschrijving, SUM( sterren ) AS aantalSterren
                    FROM level_competentie
                    INNER JOIN leerling_level ON level_competentie.levelId = leerling_level.levelId
                    INNER JOIN competentie ON competentie.id = level_competentie.competentieId
                    inner join level_type on leerling_level.levelId = level_type.levelId
                    WHERE leerlingId = ". $_SESSION["leerlingId"] .  "
                    AND level_type.type = $type
                    GROUP BY competentieId ";
            $sql2 = "SELECT SUM( aantalSterren) as maxAantalSterren FROM level
                    INNER JOIN level_competentie ON level.id = level_competentie.levelId
                    inner join level_type on level.id = level_type.levelId
                    WHERE level_type.type = $type
                    GROUP BY competentieId ";
            $result = $conn->query($sql);
            $result2 = $conn->query($sql2);
            
            ?>
            <p>&nbsp;</p>
            <table class="tabel-overzicht" border="0" width="100%">
                <tr><th>Competentie</th><th>Aantal sterren</th></tr>
            <?php
                foreach ($result as $row) {
                    $row2 = $result2->fetch();
            ?>
                <tr>
                    <td><?php echo $row["omschrijving"];?></td>
                    <td><?php toonSterren($row["aantalSterren"],$row2["maxAantalSterren"]); ?></td>
                    
                </tr>
            <?php 
                }
            ?>
            </table>
        </div>
    <!--<form method="POST">
        <input type=submit name=terug value=terug>
    </form>-->
    </main>
    </div>
    </body>
</html>
<?php
include "database.php";
session_start();
$id = $_SESSION["leerlingId"];
if (isset($_POST["logout"])) {
    session_destroy();
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";

}

//bepaal totaal aantal sterren
$sql = "select sum(sterren) as aantalSterren from leerling_level 
        inner join leerling on leerlingId = leerling.id  
        where leerling.id = $id
        and gereed = 1";

$result = $conn->query($sql);
$row = $result->fetch();
$totaalAantalSterren = $row["aantalSterren"];

//bepaal aantal levels
$sql = "select sum(aantalSterren) as aantal from level
        inner join level_type on level.id = level_type.levelId
        where type = ". $_SESSION["type"];
$result = $conn->query($sql);
$row = $result->fetch();
$aantalLevels = $row["aantal"];

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
    <?php 
    //vul de eindtijd in.
        $sql = "update leerling set eindtijd=now() where id=$id";
        $conn->exec($sql);
    ?>
    <div id="containerStart">
    <h2>Beste <?php echo $_SESSION["voornaam"] ?></h2>
    De game is over. 
    Je hebt <?php echo $totaalAantalSterren;?> sterren van de <?php echo $aantalLevels;?> sterren gehaald. 
    Goed gedaan. <br> Je krijgt zo meteen een gesprek met een docent.
    <?php 
        $sql = "select * from leerling_level 
                inner join level on level.id=levelId 
                inner join leerling on leerling.id=leerlingId
                where leerlingId = $id";
        $result = $conn->query($sql);
    ?>
    <div>
        <h3>Overzicht</h3>
    <table>
        <tr><th>Spelnaam</th><th>Aantal Sterren</th></tr>
        <?php 
            foreach ($result as $row) {
        ?>
            <tr>
                <td><?php echo $row["titel"];?></td>
                <td><?php 
                if ($row["gereed"]==1) 
                    {echo $row["sterren"];
                    } else { echo "0";} ?></td>
                
            </tr>
        <?php
            }
        ?>
    </table>
    </div>
     <form method="POST">
         <input type=submit value="spel afsluiten" name = logout>
     </form>
    </div>
    </body>
</html>
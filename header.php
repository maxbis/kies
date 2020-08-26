<?php
if ($_SESSION["rol"] == "leerling") { 
    $id = $_SESSION["leerlingId"];
    if (!isset($_SESSION["level"])) {
        $_SESSION["level"] =0;
    }
     else {
        //haal level naam en max aantal sterren op 
        $sql = "select * from level where id=". $_SESSION["level"];
        $result = $conn->query($sql);
        $row = $result->fetch();
        $levelNaam = $row["titel"];    
        $maxAantalSterren = $row["aantalSterren"];
    }
    
    //bepaal totaal aantal sterren
    $sql = "select sum(sterren) as aantalSterren from leerling_level 
            inner join leerling on leerlingId = leerling.id  
            inner join level on levelId = level.id 
            where leerling.id = $id
            and gereed = 1";
    
    $result = $conn->query($sql);
    $row = $result->fetch();
    $totaalAantalSterren = $row["aantalSterren"];
    if ($totaalAantalSterren == "") {
        $totaalAantalSterren = 0;
    }
    //bepaal aantal sterren
    $sql = "select sterren from leerling_level 
    inner join leerling on leerlingId = leerling.id  
    inner join level on levelId = level.id 
    where leerling.id = $id and
    level.id=". $_SESSION["level"];
    
    $result = $conn->query($sql);
    $row = $result->fetch();
    $aantalSterren = $row["sterren"];
    if ($aantalSterren == "") {
        $aantalSterren = 0;
    }
} else {
    $level = $_GET["bestandsnaam"];
    $sql = "select * from level where bestandsnaam='". $level . "'";
    $result = $conn->query($sql);
    $row = $result->fetch();
    $levelNaam = $row["titel"];    
    $_SESSION["level"]  = $row["id"];
    $aantalSterren = $row["aantalSterren"];
    $totaalAantalSterren = "N.V.T.";
}

if (isset($_POST["logout"])) {
    session_destroy();
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";

}
?>

<!--    <div id=header>
        <div id=headerLinks>Totaal aantal sterren: <span id=totaalAantalSterren><?php echo $totaalAantalSterren;?></span></div>
        <div id=headerRechts>Spel : <?php //echo $_SESSION["level"] . " - " . $levelNaam;?>
         - Aantal Sterren : <span id=aantalSterren><?php //echo $aantalSterren;?></span></div>
         <form method="POST">
             <input type=submit value=logout name = logout>
         </form>
    </div>
   --> 
    
            <header>
           <nav>
               <ul>
               <?php 
                if ($_SESSION["rol"] == "docent") {?>
                     <li><a href="menu.php">menu</a></li>
                     <li><a href="overzicht.php">overzicht studenten</a></li>
                    <li><a href="dagcode.php">dagcode tonen en genereren</a></li>
                <?php } ?>
                <li><form method="POST"><input type="submit" value="logout" name ="logout"></form></li>
            </ul>
           </nav>
        <div class="logo"><img src="img/logo-kies.png" width="180" height="140">
        </header>
        
        <div class="score">
                <div id=headerLinks>Totaal aantal sterren: <span id=totaalAantalSterren><?php echo $totaalAantalSterren;?></span></div>
        | <div id=headerRechts>Spel : <?php echo $_SESSION["level"] . " - " . $levelNaam;?>
         - Aantal Sterren : <span id=aantalSterren><?php echo $aantalSterren;?></span></div>
        </div>

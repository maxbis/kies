<?php
session_start();
include "database.php";
if (isset($_POST["logout"])) {
    session_destroy();
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";

}
if (isset($_POST["terug"])) {
    echo "<script type='text/javascript'>window.location.href = 'menu.php';</script>";

}

if (isset($_POST["toon"])) {
    $_SESSION["leerlingId"] = $_POST["id"];
    echo "<script type='text/javascript'>window.location.href = 'toonLeerling.php';</script>";
    
}
if (isset($_POST["filter"])) {
    $datum = $_POST["datum"];
    $datum2 = new DateTime($datum);

    $datum2->modify('+1 day');
    $datum2 = $datum2->format('Y-m-d');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Overzicht studenten </title>
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
                    <a href="overzicht.php" class="active">overzicht studenten</a>
                </li>
                <li>
                    <a href="dagcode.php">dagcode tonen en genereren</a>
                </li>
                <?php } ?>
                <li><form method="POST"><input type="submit" value="logout" name="logout"></form></li>
            </ul>
           </nav>
        <div class="logo"><img src="img/logo-kies.png" width="180" height="140">
        </header>
    <div id="leegBlok"></div>
    <main>
     <form method="POST" class="form-style">
         <input type="date" value="<?php echo date('Y-m-d'); ?>" name="datum" style="width:200px;"/>
         <input type="submit" value="filter" name ="filter">
     </form>
     
<?php 
    if (isset($datum)) {
        $sql = "select * from leerling 
                where starttijd > '". $datum ."' 
                and starttijd < '" . $datum2 . "'
                order by starttijd desc";
         
    } else {
        $sql = "select * from leerling order by starttijd desc";
    }
    $result = $conn->query($sql);
    
    ?>
    <table class="tabel-overzicht" border="0" width="100%">
        <tr><th>Leerlingnaam</th><th>Datum</th></tr>
    <?php
        foreach ($result as $row) {
    ?>
        <tr>
            <td><?php echo $row["voornaam"] . " " . $row["achternaam"];?></td>
            <td><?php echo $row["starttijd"]?></td>
            <td><form method="POST" class="form-style">
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <input type="submit" name="toon" value="toon">
                </form>
            </td>
        </tr>
    <?php 
        }
    ?>
    </table>
    <!-- <form method="POST" class="form-style">
        <input type="submit" name="terug" value="terug">
    </form> -->
     </main>
    </div>
    </body>
</html>
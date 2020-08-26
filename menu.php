<?php
session_start();
if ($_SESSION["rol"] != "docent") {
    session_destroy();
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
} else {
    if (isset($_POST["logout"])) {
        session_destroy();
        echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>menu</title>
        <link href="style/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
     <div class="content">
        <header>
           <nav>
               <ul>
                 <li><a href="menu.php" class="active">menu</a></li>
                <li>
                    <a href="overzicht.php">overzicht studenten</a>
                </li>
                <li>
                    <a href="dagcode.php">dagcode tonen en genereren</a>
                </li>
                <li><form method="POST"><input type="submit" value="logout" name="logout"></form></li>
            </ul>
           </nav>
        <div class="logo"><img src="img/logo-kies.png" width="180" height="140">
        </header>
        <div id="leegBlok"></div>
            <main>
                <h1>spellen</h1>
            <ul>
                <li>
                <a href="doolhof.php?bestandsnaam=doolhof">doolhof opdracht</a>
                </li>
                <li>
                    <a href="stoplicht.php?bestandsnaam=stoplicht">stoplicht opdracht</a>
                </li>
                <li>
                    <a href="schuifpuzzelA.php?bestandsnaam=schuifpuzzelA">schuifpuzzel</a>
                </li>
                <li>
                    <a href="rekenen.php?bestandsnaam=rekenen">rekenen</a>
                </li>
                <li>
                    <a href="nederlands.php?bestandsnaam=nederlands">nederlands</a>
                </li>
                <li>
                    <a href="geheimecode.php?bestandsnaam=geheimecode">geheime code</a>
                </li>
                <li>
                    <a href="sorteren.php?bestandsnaam=sorteren">sorteren</a>
                </li>
                <li>
                    <a href="linksRechts.php?bestandsnaam=linksRechts">hard- of software</a>
                </li>
                <li>
                    <a href="vindUSB.php?bestandsnaam=vindUSB">vind USB stick</a>
                </li>
            </ul>
        </main>
    </div>
    </body>
</html>
<?php 
}
?>
<?php
session_start();
if ($_SESSION["rol"] != "docent") {
    session_destroy();
    echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
} else {
    
    include "database.php";
    if (isset($_POST["logout"])) {
        session_destroy();
        echo "<script type='text/javascript'>window.location.href = 'index.php';</script>";
    
    }
    if (isset($_POST["terug"])) {
        echo "<script type='text/javascript'>window.location.href = 'menu.php';</script>";
    
    }
    if (isset($_POST["tonen"])) {
        $datum = $_POST["datum"];
        $type = $_POST["type"];
        $sql = "select * from dagcode 
                where datum = '$datum' 
                and type=$type";
        $result = $conn->query($sql);
        $aantalRijen = $result->rowCount();
        if ($aantalRijen ==0) {
            $tekst =  "<p class='dagcode'>Er is nog geen dagcode voor $datum</p>";
            
        } else {
            $row = $result->fetch();
            $tekst =  "<p class='dagcode'>De dagcode voor $datum is : <span id='dagcode'>"
            . $row["dagcode"]. "</span></p>";
            
        }  
    } 
    if ($_POST["toevoegen"]) {
        $datum = $_POST["datum"];
        $type = $_POST["type"];
        //controleer eerst of er al een dagcode voor die dag is.
        $sql = "select * from dagcode 
                where datum = '$datum' 
                and type=$type";
        $result = $conn->query($sql);
        $aantalRijen = $result->rowCount();
        if ($aantalRijen ==0) {
            //genereer een dagcode van 5 karakters
            $str = "";
            $characters = array_merge(range('A','Z'), range('a','z'), range('2','9'));
            $max = count($characters) - 1;
            for ($i = 0; $i < 5 ; $i++) {
            	$rand = mt_rand(0, $max);
            	$str .= $characters[$rand];
            }
            $dagcode = $str;
            $sql = "insert into dagcode (dagcode, datum, type) value (:dagcode, :datum, :type)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':dagcode', $dagcode);
            $stmt->bindParam(':datum', $datum);
            $stmt->bindParam(':type', $type);
            
            $stmt->execute();
            $tekst =  "<p class='dagcode'>de genereerde dagcode is: <span id='dagcode'>". $dagcode . "</span></p>";
        } else {
            $row = $result->fetch();
            $tekst = "<p class='dagcode'>Er is al een dagcode voor deze datum. De dagcode is : <span id='dagcode'>"
            . $row["dagcode"]. "</span></p>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dagcode</title>
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
        <?php echo $tekst;?>
        <br>
        <h3>Dagcode tonen</h3>
        <form method="POST" class="form-style">
            <input type="date" name="datum" value="<?php echo date('Y-m-d'); ?>" style="width:200px;">
            <select name="type" style="width:200px; height:45px;">
                <option value=0>Kennismaking</option>
                <option value=1>Introductieprogramma</option>
            </select>
            <input type="submit" name="tonen" value="tonen">
        </form>
        <h3>Dagcode genereren</h3>
        <form method="POST" class="form-style">
            <input type="date" name="datum" value="<?php echo date('Y-m-d'); ?>" style="width:200px;">
            <select name="type" style="width:200px; height:45px;">
                <option value=0>Kennismaking</option>
                <option value=1>Introductieprogramma</option>
            </select>
            <input type="submit" name="toevoegen" value="opslaan">
        </form>
   <!-- <form method="POST" class="form-style">
        <input type="submit" name="terug" value="terug">
    </form> -->
</main>
</div>
    </body>
</html>

<?php
}
?>
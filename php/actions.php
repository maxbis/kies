<?php

    session_start();

    require "database.php";

    // SQL Statement om de gebruikers op te halen uit de db 
    $sql = "SELECT * FROM gebruiker";
    
    // Hier wordt een prepare statement toegepast (waardoor de sql statement meerdere keren snel uitgevoerd kan worden)
    $stmt = $conn->prepare($sql); 
    $stmt->execute();
    // Hier worden alle kolommen uit de table gehaald die over blijven 
    $gebruikers = $stmt->fetchAll(PDO::FETCH_ASSOC); 

// Registratie voor VMBO leerlingen
function RegistratieFunctie(){

    if(isset($_POST['registreer'])){
        
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $role = "vmbo-er";

        // VMBO-ers hebben geen wachtwoord dus dit is atm niet nodig, laat m ff staan voor de docenten en studenten accounts
        //$salt = 'i32h4j23h4b2j3/$h3j4802h';
        //$wachtwoord = $_POST['wachtwoord'];
         //$wachtwoord = md5($salt.$wachtwoord);
        
        // Check of de ingevulde email al bestaat
        //$emailCheckSql = "SELECT * from gebruiker where (email ='$email')";

        $query = $conn->prepare( "SELECT `email` FROM `gebruiker` WHERE `email` = ?" );
        $query->bindValue( 1, $email );
        $query->execute();


        // Als de email al bestaat, geef een error
        if ($query->rowCount() > 0){
            echo "Email bestaat al";
        }

        // Als hij nog niet bestaat, maak het account aan
        else {

            // De update query. past de tekst en datum aan met het id wat meegegeven wordt in de url
            $sql = "INSERT INTO gebruiker (voornaam, achternaam, email, rol) VALUES ('$voornaam', '$achternaam', '$email', '$role')";
            // Hier wordt een prepare statement toegepast (waardoor de sql statement meerdere keren snel uitgevoerd kan worden)
            $stmt = $conn->prepare($sql);
            // Hier wordt de sql ge-execute 
            $stmt->execute();
            
            //header('location: /../Intake/home.php');    

        }
            
    }   
} 

// Inlog ( voor alle accounts )
function InlogFunctie(){
    require "database.php";

    if(isset($_POST['login']) && $_POST['email'] != ''){
    
        // Dit zorgt ervoor dat naast de normale md5 hash het password nog beter geencrypt wordt, en het
        // eigenlijk een unieke encryptie is. Ik heb deze sleutel zelf geschreven. 
        $salt = 'i32h4j23h4b2j3/$h3j4802h';
        
        
        
        // Haalt de gebruikersinput op, het email
        $email = $_POST['email'];

        // pakt het wachtwoord en decrypt deze
        //$wachtwoord = md5($salt.$_POST['wachtwoord']);
        $wachtwoord = $_POST['wachtwoord'];
        
        // Haal de gebruiker op uit de database met :email en :wachtwoord
        $sql = "SELECT * FROM gebruiker WHERE Email = :email AND Wachtwoord= :wachtwoord";
        //stuur naar mysql.
        $stmt = $conn->prepare($sql); 
        // gebruik $email_from_form als :email
        $stmt->bindParam(':email', $email);
        // gebruik $password_from_form als :password
        $stmt->bindParam(':wachtwoord', $wachtwoord);
        // voer dit uit
        $stmt->execute();
        // haal de data op en maak er een associatieve array ervan, genaamd $row
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        
        // als email niet leeg is of $row true is voer deze functie uit
    
            if(($row['Email'] != "") && ($row != false)) {
                // Het emailadres dat is ingevoerd staat in de database
                //echo "U bent ingelogd!";
                // De sessie array wordt 'gevuld' met waardes uit de database
                $_SESSION['email'] = $row['Email'];
                $_SESSION['voornaam'] = $row['Voornaam'];
                $_SESSION['achternaam'] = $row['Achternaam'];
                $_SESSION['rol'] = $row['Rol'];
                $_SESSION['isLoggedIn'] = true;
            
               // gebruiker wordt doorgestuurd naar home.php
               header("location: /../Intake/home.php");
            }
            //als de email wel leeg is, of $row false is, blijf op de pagina
            else{
                echo "email klopt niet of het wachtwoord is niet juist, probeer aub opnieuw";
            }
    }
}

// Functie die checkt of er op te uitlog knop geklikt wordt
function checkLogOut(){
    // Als er op de uitlog knop gedrukt wordt, word je uitgelogd dmv de sessie te sluiten. 
    if(isset($_GET['logout']) && $_GET['logout'] == true ){
        // Hier wordt de sessie 'gedestroyed' ofwel gesloten.
        session_destroy();
        // En vervolgens weer doorgestuurd naar de login pagina. 
        header("location: Login/Inloggen.php");
    }
}

// Functie die de sessie checkt 
function checkLoggedIn(){   
    // Dit is gewoon een variable die de voornaam ophaalt zodat die getoond kan worden 
    $user = $_SESSION['voornaam'];
    $rol = $_SESSION['rol'];

    // Als er nog niet ingelogd is, redirect naar de login page
    if($user == ("")){
        header("location: php/login.php");
    }
    
}

// Functie voor intake code aan te maken
function MaakIntakeFunctie(){
    require "database.php";

    if(isset($_POST['submit_code'])){
        
        $Login_Code = $_POST['Login_Code'];
        $Intake_Start = $_POST['Intake_Start'];
        $Intake_Eind = $_POST['Intake_Eind'];
        $SelectNaam = $_POST['Leerling_ID'];

        echo $SelectNaam;

        $sql = "INSERT INTO Intake (Login_Code, Leerling_ID,  Intake_Start, Intake_Eind) VALUES ('$Login_Code', '$SelectNaam', '$Intake_Start', '$Intake_Eind')";
        // Hier wordt een prepare statement toegepast (waardoor de sql statement meerdere keren snel uitgevoerd kan worden)
        $stmt = $conn->prepare($sql);
        // Hier wordt de sql ge-execute 
        $stmt->execute();
    }
}

function StartIntakeFunctie(){
    require "database.php";

    if(isset($_POST['start-intake']) && $_POST['email'] != ''){
          
        // Haalt de gebruikersinput op, het email
        $email = $_POST['email'];

        // pakt het wachtwoord en decrypt deze
        //$wachtwoord = md5($salt.$_POST['wachtwoord']);
        $Login_Code = $_POST['login-code'];
        
        // Haal het emailadres op uit de gebruikerstabel
        $sql = "SELECT Intake.Login_Code, 
                        Intake.Leerling_ID,
                        Intake.Intake_Start,
                        Intake.Intake_Eind,
                        Gebruiker.Email,
                        Gebruiker.Gebruiker_ID
                FROM (Intake
                INNER JOIN Gebruiker
                ON Intake.Leerling_ID = Gebruiker.Gebruiker_ID) 
                WHERE Gebruiker.Email = :email 
                AND Intake.Login_Code = :login_code";
        //stuur naar mysql.
        $stmt = $conn->prepare($sql); 
        // gebruik $email als :email
        $stmt->bindParam(':email', $email);
        // gebruik $Login_Code als :login_code
        $stmt->bindParam(':login_code', $Login_Code);

        // voer dit uit
        $stmt->execute();
        // haal de data op en maak er een associatieve array ervan, genaamd $row
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 

        // Dit het startmoment van de intake
        $intakeStartMoment = strtotime($row['Intake_Start']);
        $DateTimeStart= date("Y-m-d H:i:s", $intakeStartMoment);
        // Dit het eindmoment, tussen deze twee variabelen werkt de inlog code en anders niet. 
        $intakeEindMoment = date('Y-m-d-h-m', strtotime($row['Intake_Eind']));

        echo $DateTimeStart;

        
        // als email niet leeg is of $row true is voer deze functie uit
    
            if(($row['Email'] != "") && ($row['Login_Code'] != "")) {
                $_SESSION['Leerling_ID'] = $row['Gebruiker_ID'];
                $_SESSION['email'] = $row['Email'];
                $_SESSION['login_code'] = $row['Login_Code'];
               
               // gebruiker wordt doorgestuurd naar home.php
                header("location: /../Intake/levels/level1.php");
            }
            //als de email wel leeg is, of $row false is, blijf op de pagina
            else{
                echo "email klopt niet of het wachtwoord is niet juist, probeer aub opnieuw";
            }
    }
}

// Functie die de sessie checkt 
function checkIntakeCorrect(){   
    require "database.php";
    // Dit is gewoon een variable die de voornaam ophaalt zodat die getoond kan worden 
    $Login_Code = $_SESSION['login_code'];
    $Leerling_ID = $_SESSION['Leerling_ID'];

    
    // Als er nog niet ingelogd is, redirect naar de login page
    if($Leerling_ID == ("")){
        header("location: ../php/intake.php");
    }  
}

// Functie die alle data ophaalt uit de database 
function getIntakeData(){
    require "database.php";

    $Leerling_ID = $_SESSION['Leerling_ID'];

    $sql = "SELECT Intake.Leerling_ID,
                    Intake.Intake_Start,
                    Intake.Intake_Eind,
                    Score.Leerling_ID,
                    Score.Score_ID,
                    Score.Huidig_Level_ID,
                    Score.Student_Sterren,
                    Level.Level_ID,
                    Level.Naam,
                    Level.Sterren
            FROM ((Intake 
            INNER JOIN Score
            ON Intake.Leerling_ID = Score.Leerling_ID)
            INNER JOIN Level 
            ON Score.Huidig_Level_ID = Level.Level_ID)
            WHERE Score.Leerling_ID = '$Leerling_ID'";
    $stmt = $conn->prepare($sql);
    // Hier wordt de sql ge-execute 
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC); 

    $_SESSION['Huidig_Level'] = $row['Huidig_Level_ID'];
    $_SESSION['Aantal_Sterren'] = $row['Student_Sterren'];
    $_SESSION['Sterren_Voor_Level'] = $row['Sterren'];
}


// Functie voor de docenten die de data ophaalt uit de score tabel en dit omzet in bruikbare data
function CheckStudentProgress(){
if ($_SESSION['rol'] == 'docent') {
    require "database.php";
        // Haal de data op uit de database
        $sql = "SELECT * FROM Score";
        //stuur naar mysql.
        $stmt = $conn->prepare($sql); 
        $stmt->execute();
        $scores = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}


function GeefSterrenFunctie(){
    require "database.php";

    $Huidig_Level = $_SESSION['Huidig_Level'];
    $Gebruiker_ID = $_SESSION['Leerling_ID'];

    $sql = "SELECT Huidig_Level_ID FROM score WHERE Leerling_ID = $Gebruiker_ID";
    $stmt = $conn->prepare($sql);
    
    // Hier wordt de sql ge-execute 
    $stmt->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC); 

    $_SESSION['HuidigLevel'] = $Huidig_Level;
    $_SESSION['LevelVolgensDB'] = $row['Huidig_Level_ID'];
    // Dit is voor nu een variabel om te testen of het antwoord klopt, hier kan de javascript komen
    // die kijkt naar of het antwoord goed is oid. 
    $Correct_Antwoord = "4";

    if (isset($_POST['continue'])){
        if ($_POST['test'] == $Correct_Antwoord ){
            $Geef_Sterren = $_SESSION['Sterren_Voor_Level'];

            $Volgend_Level = ($Huidig_Level + 1);

            $sql = "UPDATE `score` SET `Student_Sterren` = '$Geef_Sterren', `Huidig_Level_ID` = '$Volgend_Level' WHERE `score`.`Leerling_ID` = $Gebruiker_ID;";
            $stmt = $conn->prepare($sql);
            // Hier wordt de sql ge-execute 
            $stmt->execute();

            $_SESSION['HuidigLevel'] = $Volgend_Level;

            $_SESSION['LevelVolgensDB'] = $row['Huidig_Level_ID'];

            header("location: ../levels/level$Volgend_Level.php");
        } else {
            echo "Onjuist antwoord, probeer opnieuw";
        }


    }


}

// Als er op de 'help' knop geklikt wordt wordt deze functie aangeroepen
function VraagOmHulp(){

    if($_POST['help']){
        $sql = "UPDATE `score` SET `Student_Sterren` = '$Geef_Sterren', `Huidig_Level_ID` = '$Volgend_Level' WHERE `score`.`Leerling_ID` = $Gebruiker_ID;";
            $stmt = $conn->prepare($sql);
            // Hier wordt de sql ge-execute 
            $stmt->execute();
    }
}


?>

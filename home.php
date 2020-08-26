<?php 
    require "php/actions.php";

    checkLoggedIn();
    CheckStudentProgress();
    MaakIntakeFUnctie();
    
    $Leerling_ID = $_SESSION['Leerling_ID'];

    echo "uh", $Leerling_ID;
    echo "Welkom, je rol is: ", $_SESSION['rol'];

    $sql = "SELECT Score.Score_ID, 
                Score.Student_Sterren,
                Gebruiker.Voornaam,
                Gebruiker.Achternaam, 
                Gebruiker.Gebruiker_ID,
                Level.Naam 
            FROM ((Score 
            INNER JOIN Gebruiker 
            ON Score.Leerling_ID = Gebruiker.Gebruiker_ID) 
            INNER JOIN Level 
            ON Score.Huidig_Level_ID = Level.Level_ID)";

        //stuur naar mysql.
        $stmt2 = $conn->prepare($sql); 
        $stmt2->execute();
        $scores = $stmt2->fetchAll(PDO::FETCH_ASSOC); 

    if ($_SESSION['rol'] == 'docent'){
?>
        <h1> Vooruitgang van de studenten </h1>
        <table>
            <thead>
                <tr class="table100-head">
                    <th class="column1">ID</th>
                    <th class="column2">Leerling naam</th>
                    <th class="column3">Huidig level</th>
                    <th class="column4">Sterren</th>
                                                </tr>
            </thead>
            <tbody>
                <?php foreach($scores as $score): ?>
                    <tr>
                        <td class="column1"><?php echo $score['Score_ID']?></td> 
                        <td class="column2"><?php echo $score['Voornaam'], " ", $score['Achternaam']?></td>
                        <td class="column3"><?php echo $score['Naam']?></td>
                        <td class="column4"><?php echo $score['Student_Sterren']?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <h1> Code aanmaken voor intake </h1>

        <? var_dump($LeerlingNamen); ?>

        <form method="POST">
            <p> Nieuwe intake code: </p> <input type="text" name="Login_Code" required>
            <p> Wanneer start de intake? </p><input type="datetime-local" name="Intake_Start" required>
            <p> Wanneer eindigt de intake? </p> <input type="datetime-local" name="Intake_Eind" required>
            <p> Welke student doet de intake? </p> 
            <select>
                <?php foreach($scores as $score): ?>
                    <option value="<?php echo $score['Voornaam'], " ", $score['Achternaam'] ?>"><?php $Leerling_ID = $score['Gebruiker_ID']; echo $score['Voornaam'],  " ", $score['Achternaam']  ?> </option>
                <?php endforeach; ?>
            </select>

            <input type="hidden" name="Leerling_ID" value="<?php echo $Leerling_ID; ?>" />

            <input type="submit" name="submit_code">
        </form>
<?php
    }
?> 
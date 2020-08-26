<?php 
    session_start();

//    require "actions.php";

    RegistratieFunctie();

?>

<html>
    <head>
    
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <form method="POST">
            
            
            <span>
                Registreer nieuwe gebruiker
            </span>
            <br>

            <span>
                Voornaam
            </span>

            <input type="text" name="voornaam" required>
            
            <span>
                Achternaam
            </span>
            <br>
            
            <input type="text" name="achternaam" required>
            <br>

            <span>
                Email
            </span>
            
            <input  type="text" name="email" required>
            <br>
                        
            <input type="submit" name="registreer" value="Registreer gebruiker">

        </form>
    </body>
</html>
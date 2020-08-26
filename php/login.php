<?php
    //session_start();
    require "actions.php";
    InlogFunctie();
?>



<!DOCTYPE html>
<html>
    <head>
    <head>
    
    <body>
        <form method="POST">
            <span>
                Email
            </span>

            <input type="text" name="email" >
            <br>

            <span>
                Wachtwoord
            </span>

            
            <input type="password" name="wachtwoord" >
            <br>

            <input type="submit" name="login" value="Log in">

        </form>
    </body>
</html>
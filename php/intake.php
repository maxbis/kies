<?php 

    require "actions.php";

    StartIntakeFunctie();
?>

<html>

    <h1> welkom bij de intake, login met je email en code. </h1>


    <form method ="POST"> 
        <input type="text" name="email" />
        <input type="text" name="login-code" />
        
        <input type="submit" name="start-intake" value="Start">
    </form>
<?php
if ($_SERVER['SERVER_NAME']== "localhost") {
    $servername ="localhost";
    $username ="root";
    $password ="";
    $database ="kies";
} else { 
    $servername = "rdbms.strato.de";
    $username ="U3812827";
    $password ="1qaz2wsx3edc";
    $database ="DB3812827";
}
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Verbinding mislukt: " . $e->getMessage();
    }
<?php
$level = $_SESSION["level"];
$leerlingId = $_SESSION["leerlingId"];
$sql = "select * from level where id = $level";
$result= $conn->query($sql);
$row = $result->fetch();

$aantalSterren = $row["aantalSterren"];

//voeg alleen toe als nog niet bestaat
$sql = "select * from leerling_level where leerlingId=$leerlingId and levelId = $level";
$result = $conn->query($sql);
$aantalRijen =$result->rowCount();
if ($aantalRijen == 0) {
    $sql = "INSERT into leerling_level  (levelId, leerlingId, sterren) values (:level, :leerling, :aantalSterren)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':level', $level);
    $stmt->bindParam(':leerling', $leerlingId);
    $stmt->bindParam(':aantalSterren', $aantalSterren);
    
    $stmt->execute();
}
?>
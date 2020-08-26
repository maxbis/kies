<?php
include "database.php";
$levelId=  $_SESSION["level"];
$sql = "select * from level where id=".$levelId;
$result = $conn->query($sql);
$row = $result->fetch();


?>

<div id="gevondenCijfer">
<h1>De gevonden code is:</h1>
<p id="cijfer"><?php echo $row["cijfercode"];?></p>
<form id="formNext" method="POST" class="form-style">
    <input type="submit" value="Volgend spel" id="nextLevel" name="nextLevel">
</form>
</div>
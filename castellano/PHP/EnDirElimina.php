<?php
include($_SERVER['DOCUMENT_ROOT']."/rao/rao_con.php");

$id = $_GET["id"];

$SQL = "DELETE FROM EnDirHome WHERE IdEnDirHome =".$id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $id;
?>
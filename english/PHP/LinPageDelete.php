<?php
include($_SERVER['DOCUMENT_ROOT']."/rao/rao_con.php");

$idCap = $_GET["IdCap"];
$IdLin = $_GET["IdLin"];

$SQL = "DELETE FROM LinMenu WHERE IdLinMenu = " . $IdLin; 
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $idCap;//."|".$IdLin;
?>
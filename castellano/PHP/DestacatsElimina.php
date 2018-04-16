<?php
include($_SERVER['DOCUMENT_ROOT']."/rao/rao_con.php");

$id = $_GET["id"];
$IMG = $_GET["IMG"];

if ($IMG)
{
	unlink('../ImgDes/'.$IMG);	
}

$SQL = "DELETE FROM Destacat WHERE IdDestacat =".$id;
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli));


echo $id;
?>
<?php

error_reporting(E_ALL);

$destino = "../../imgPublicacions"; 
$nom = mysqli_real_escape_string($mysqli,$_GET["nom"]);
$id = mysqli_real_escape_string($mysqli,$_GET["id"]);

if ($id != "no") move_uploaded_file ( $_FILES [ 'ImatgeEditaPublicacions'.$id ][ 'tmp_name' ], $destino . '/' . $nom); 
else move_uploaded_file ( $_FILES [ 'ImatgeNewPublicacions' ][ 'tmp_name' ], $destino . '/' . $nom); 

//echo $_FILES [ 'Imatge' ][ 'name' ];

echo  "Fichero subido correctamente";

echo $destino . '/' . $nom;
?> 





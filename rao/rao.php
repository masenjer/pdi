<?php	

$mysqli = new mysqli("localhost", "pdi_YxFEx6nm", 'dev1lbAGVPxcZ', "pdi");  

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error()); 
    exit();
}

$mysqli->query("SET NAMES 'utf8'");

?>


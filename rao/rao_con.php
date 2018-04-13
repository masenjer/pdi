<?php	

$mysqli = new mysqli("localhost", "icacs_9jvPSU1FHwIuRMaN", 'hSALYVFFJAKhXzNS', "icacs");  

/* check connection */
if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error()); 
    exit();
}

$mysqli->query("SET NAMES 'utf8'");

?>
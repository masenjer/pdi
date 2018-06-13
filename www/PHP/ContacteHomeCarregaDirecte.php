<?php
include($_SERVER['DOCUMENT_ROOT']."/rao/rao_con.php");

ini_set("session.gc_maxlifetime",3);
session_start();

$permiso="";
$colsp=5;







$SQL = "SELECT * FROM Contacte WHERE  IdSite =".$_SESSION["IdSite"]." ";
if (!$result = $mysqli->query($SQL))printf("Errormessage: %s\n", mysqli_error($mysqli)); 
while ($row = $result->fetch_assoc()){

	

	if ($_SESSION["Noticias"]=="1")
	{	
	echo '
		
				<h3><span class="glyphicon glyphicon-edit" aria-hidden="true" 	onClick="CarregaContacteEdicio()"></span></h3>
			
		';
	

	}
	echo '
		<aside class="contact-info mt-10">
        	<div class="titol-contacte"><a href="javascript:void(0)"><strong>'.$row["Titol"].'</strong></a></div>
            <p>'.$row["Contingut"].'</p>
        </aside>';

				/*
				<tr valign="middle">					
					<td height="20px" align="right" '.$accion.' class="InfoContacteHome"> Telèfons i horari	</td>					
				</tr>';
				*/




}

?>

<?php
session_start();	


if ($_SESSION["IdSite"]==0){

	//Títol de l'aplicació
	$titol_APP = "JPDI - Junta de Personal Docent i Investigador"; 

	//Descripció de l'aplicació
	$descripcio_APP = "";

	//Texto de la cabcera que te lleva a la home cuando pulsas encima
	$cabecera_superior = "JPDI - Junta de Personal Docent i Investigador";

	//Text del carousel
	$titol_carousel = "JPDI - Junta de Personal Docent i Investigador";
	$desc_carousel = "UAB";//"Facultat de medicina";

}/*elseif($_SESSION["IdSite"] == 1){
		//Títol de l'aplicació
	$titol_APP = "Master's degree in applied clinical research in health sciences"; 

	//Descripció de l'aplicació
	$descripcio_APP = "The Master in Applied Clinical Investigation in Health Sciences provides a generic framework of high level postgraduate education the objective of which consists in training able investigators capable of managing and carrying out research projects related to their clinical work.";

	//Texto de la cabcera que te lleva a la home cuando pulsas encima
	$cabecera_superior = "Master's degree in applied clinical research in health sciences";

	//Text del carousel
	$titol_carousel = "Master's degree in applied clinical research in health sciences";
	$desc_carousel = "";//"UAB";

}
*/
?>

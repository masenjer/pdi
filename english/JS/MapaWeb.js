function MostraMapaWeb()
{
	$.get("PHP/MapaWebMostra.php",{},LlegadaMostraMapaWeb);
}

function LlegadaMostraMapaWeb(data)
{
	$("#MapaWeb").html(data);
	
	$('#ContingutPages').fadeOut(1000);
	$('#DIVHome').fadeOut(1000);
	$('#Directori').hide();

	$("#MapaWeb").delay(1001).fadeIn(1000);
	
	CanviaColorWeb($("#VARColorWeb").val());	 
}


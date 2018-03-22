<?php
	$uri = $_SERVER['REQUEST_URI'];
	$server = $_SERVER['HTTP_HOST'];
    $uri_array = explode("/", $uri);
    $conta = count($uri_array);

    $pagina_atual = "";
    /* LOCALHOST AND LOCALHOST:8080 */
    if($server == "localhost:8080" || $server == "localhost") {
	    if($conta >= 3) {
	    	$string_recebida = $uri_array[2];

	    	if($string_recebida == "" || $string_recebida == NULL) {
	    		$pagina_atual = "home";
	    	} else {
	    		$pagina_atual = $string_recebida;
	    	}
	    }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge; IE=11; IE=EmulateIE11; IE=10; IE=EmulateIE10; IE=9; IE=EmulateIE9; IE=8; IE=EmulateIE8; IE=7; IE=EmulateIE7; IE=5; chrome=1; safari=1" />
	<title>Club 1903 Motorcycles</title>

	<?php
		ScriptLoader::LoadCSS('style');

		ScriptLoader::LoadPLUGINSJS('jquery-3.2.1.min.js');
	?>
</head>
<body style="position: relative; background: #dcdcdc">
	<img src="<?= RAIZSITE ?>/img/background.png" style="position: absolute; bottom: 250px; left: 0; width: 100%" class="hidden-xs">
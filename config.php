<?php
	$server = $_SERVER['HTTP_HOST'];

	if($server == "localhost:8080") {
		
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT']."/NSC2018P1";
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].":8080/NSC2018P1";
		$caminho_plugins = "http://".$_SERVER['SERVER_NAME'].":8080/plugins/";
	} else if($server == "localhost") {
		
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT'].'/NSC2018P1';
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].'/NSC2018P1';
		$caminho_plugins = "http://".$_SERVER['SERVER_NAME'].'/plugins/';
	}

	define("RAIZ", $caminho_raiz);
	define("RAIZSITE", $caminho_site);
	define("VIEWS", RAIZ.'/views/');
	define("COMPONENTES", VIEWS.'/componentes/');
	define("LAYOUTS", VIEWS.'/layouts/');
	define("IMAGENS", RAIZSITE.'/imagens/');
	define("CLASSES", RAIZ.'/class/');
	define("STYLES", RAIZSITE.'/css/');
	define("SCRIPTS", RAIZSITE.'/js/');
	define("PLUGINS", $caminho_plugins);

	global $urlArr;

	if($server == "localhost" || $server == "localhost:8080") {
		$urlArr = explode("/", trim($_SERVER['REQUEST_URI'],'/'));
		
		if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME']=='127.0.0.1' || $urlArr[0] == 'NSC2018P1') {
		    array_shift($urlArr);
		}
	}

	include_once CLASSES.'Autoloader.class.php';
	Autoloader::init();
?>
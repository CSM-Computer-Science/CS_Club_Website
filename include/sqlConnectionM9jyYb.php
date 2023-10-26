<?php header('X-Frame-Options: SAMEORIGIN');
	
	/* Database */
	define('db_servername', '');
	define('db_username', '');
	define('db_password', '');
	define('db_dbname', '');
	$conn = new mysqli(db_servername, db_username, db_password, db_dbname);
	
	/* Additional */
	define('prefix_cookie', 'ABC');
	define('tinymce_token', '');
	define('recaptcha_private', 'ABC');
	define('logo_direction', 'horizontal'); //vertical/horizontal
	
	/* Timezone */
	date_default_timezone_set('America/Los_Angeles');
	
	/* Do not touch */
	function convertJson($string){
	$find =    array("á", "é", "í", "ó", "ú", "Á", "É", "Í", "Ó", "Ú", "ñ", "Ñ", "¡", "¿");
	$replace = array("&aacute;", "&eacute;", "&iacute;", "&oacute;", "&uacute;", "&Aacute;", "&Eacute;", "&Iacute;", "&Oacute;", "&Uacute;", "&ntilde;", "&Ntilde;", "&iexcl;", "&iquest;");
	$finalString = str_replace($find, $replace, $string);
	
	return mb_convert_encoding($finalString, 'UTF-8', 'ISO-8859-1');
	}
?>
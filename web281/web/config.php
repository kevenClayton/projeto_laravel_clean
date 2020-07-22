<?php
require 'environment.php';

global $config;
global $db;


//comercial
define("CHAVE", "wUmpD7iPkEdQ8+y0dmfAVTAI8u0EhDMZn8bZdNWcQHc="); //Chave Cliente
//define("CHAVE", "RZZuhI4HKPnkrUuToq3j8A==");


define('EMAIL','waimoveis@gmail.com');
define('ENDERECO','R. Expedicionário Amaro da Silveira, 36, Caiçara');

define('TELEFONE_FIXO','(31) 3464-2304');
define('TELEFONE_FIXO_SCRIPT','3134642304');

//define('TELEFONE_FIXO2','(31) 3077-0978');
//define('TELEFONE_FIXO_SCRIPT2','3130770978');
//
//define('TELEFONE_FIXO3','(31) 3077-0978');
//define('TELEFONE_FIXO_SCRIPT3','3130770978');

define('TELEFONE_CELULAR','(31) 99812-0999');
define('TELEFONE_CELULAR_SCRIPT','31998120999');

define('TWITTER','#');
define('LINKEIN','#');
define('FACEBOOK', 'https://www.facebook.com/');
define('GOOGLEPLUS', '#');
define('INSTAGRAM', 'https://www.instagram.com/waimoveis.ws/');

define('TITULO_AUXILIAR', 'WA Imóveis ');



define('AREADOCLIENTE', 'https://www.portalunsoft.com.br/area-do-cliente/WA');

define("URLAPI", "https://api.imoview.com.br/");

$config = array();
if(ENVIRONMENT == 'development') {
	//Fagner
    
define("BASE_URL", "https://www.waimoveismg.com.br/");


	//Bruno
//	define("BASE_URL", "http://localhost/modelo2/");

	$config['dbname'] = 'jomar';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
        
} else {
	// define("BASE_URL", "http://localhost/portfolio/");
	// $config['dbname'] = 'filme';
	// $config['host'] = 'localhost';
	// $config['dbuser'] = 'root';
	// $config['dbpass'] = '';
}

$config['default_lang'] = 'en';

?>
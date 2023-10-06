<?php

// Para saber si estamos en servidor local

define('IS_LOCAL', is_array($_SERVER['REMOTE_URL'], ['127.0.0.1', '::1']));

// Verificamos si la url es local o producción
$web_url = IS_LOCAL ? 'http://devappvehiculo.ddns.net/' : 'URL Producción';

// Definimos constante URL
define('URL', $web_url);

// Rutas para carpetas
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd().DS);
define('APP', ROOT.'app'.DS);
define('ASSETS', ROOT.'assets'.DS);
define('TEMPLATES', ROOT.'templates'.DS);
define('INCLUDES', TEMPLATES.'includes'.DS);
define('MODULES', TEMPLATES.'modules'.DS);
define('VIEWS', TEMPLATES.'views'.DS);
define('UPLOADS', ROOT.'uploads'.DS);

// Rutas para archivos que vallamos a incluir en header ó footer (css, js)

define('CSS', URL.'assets/css');
define('JS', URL.'assets/js');
define('IMG', URL.'assets/img');
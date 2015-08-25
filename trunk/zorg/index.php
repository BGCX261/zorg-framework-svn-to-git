<?php
//$debut = time()+microtime();
defined('BASE_PATH') || define ('BASE_PATH', realpath(dirname(__FILE__)));
defined('APP_PATH') || define ('APP_PATH', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR.'app');
defined('CTRL_PATH') || define ('CTRL_PATH', APP_PATH.DIRECTORY_SEPARATOR.'controller');
defined('MODEL_PATH') || define ('MODEL_PATH', APP_PATH.DIRECTORY_SEPARATOR.'model');
defined('VIEW_PATH') || define ('VIEW_PATH', APP_PATH.DIRECTORY_SEPARATOR.'view');
defined('LAYOUT_PATH') || define ('LAYOUT_PATH', VIEW_PATH.DIRECTORY_SEPARATOR.'layout');
defined('CSS_PATH') || define ('CSS_PATH', BASE_PATH.DIRECTORY_SEPARATOR.'css');
defined('CSS_PATH_RELATIVE') || define ('CSS_PATH_RELATIVE', '.'.DIRECTORY_SEPARATOR.'css');
defined('JS_PATH') || define ('JS_PATH', BASE_PATH.DIRECTORY_SEPARATOR.'js');
defined('JS_PATH_RELATIVE') || define ('JS_PATH_RELATIVE', '.'.DIRECTORY_SEPARATOR.'js');
defined('EXT_PATH') || define ('EXT_PATH', BASE_PATH.DIRECTORY_SEPARATOR.'zorg-ext');

require 'zorg/application.php';

$application = new Zorg_Application();
$application->run();

//$fin = time()+microtime();
//echo $fin - $debut;
?>

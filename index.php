<?php

/*
function __autoload($class_name) {
require_once(__DIR__.'library/com.denis/src/{$class_name}.php');
}
*/

//error_reporting (E_ALL);

if (version_compare(phpversion(), '5.1.0', '<') == true) {
    die ('PHP5.1 Only');
}

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Константы:
define ('DIRSEP', DIRECTORY_SEPARATOR);

// Узнаём путь до файлов сайта
$site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP;
$site_path .= 'library\\';
$srcDir = __DIR__.'\com.denis\src\\';
define ('site_path', $site_path);

define('WEB_PATH', '/com.denis/src/');
define('src_path', $srcDir);

require_once $srcDir.'components/bootstrap.php';













/*
require_once $srcDir.'/Autoloader/MapAutoloader.php';
$autoloader = new MapAutoloader();
spl_autoload_register(array($autoloader, 'autoload'));



$autoloader->registerClass('DBConnector', $srcDir.'/DBConnector.php');
$autoloader->registerClass('Registry', $srcDir.'/classes/Registry.php');
$autoloader->registerClass('Router', $srcDir.'/Router.php');
$autoloader->registerClass('Controller_Base', $srcDir.'/controllers/base.php');
$autoloader->registerClass('Controller_Members', $srcDir.'/controllers/members.php');
$autoloader->registerClass('Index', $srcDir.'/controllers/Index.php');
$autoloader->registerClass('Template', $srcDir.'/views/Template.php');

//connection to data base
$serverName = "localhost";
$userName = "root";
$passWord = "";
$connector = new DBConnector();
$db = $connector->connect($serverName, $userName, $passWord);
Registry::set('db', $db);


# Создаём объект шаблонов
$template = new Template();
registry::set ('template', $template);

$router = new Router();
Registry::set('router', $router);

$router->setPath($srcDir.'controllers');
$router->delegate();
*/

/*
Registry::set('1', 'Den');
Registry::set('2', 'Tom');
echo Registry::get('1');
*/

//$registry->set('')
/*
$connector = new DBConnector();
echo '<pre>';
var_dump($_REQUEST);
echo '</pre>';
*/





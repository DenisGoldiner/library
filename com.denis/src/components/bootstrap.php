<?php
/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 27.12.2015
 * Time: 22:49
 */

require_once $srcDir.'/components/Router.php';
require_once $srcDir.'/components/Registry.php';
require_once $srcDir.'/components/DBConnector.php';
require_once $srcDir.'/components/Collection.php';

require_once $srcDir.'core/Controller.php';
require_once $srcDir.'core/View.php';
//require_once $srcDir.'core/Model.php';

require_once $srcDir . 'models/bookshelf_model.php';


$router = new Router();
Registry::set('router', $router);

$router->setPath($srcDir.'controllers');
$router->delegate();
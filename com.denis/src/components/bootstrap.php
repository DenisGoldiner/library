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

//подключение семейства классов для работы с клиентом
require_once $srcDir.'classes/Client/client/clientData/clientInfo/clientName/ClientFirstName.php';
require_once $srcDir.'classes/Client/client/clientData/clientInfo/clientName/ClientLastName.php';
require_once $srcDir.'classes/Client/client/clientData/clientInfo/clientCardInfo/BooksNumber.php';
require_once $srcDir.'classes/Client/client/clientData/clientInfo/ClientCard.php';
require_once $srcDir.'classes/Client/client/clientData/clientInfo/ClientName.php';
require_once $srcDir.'classes/Client/client/clientData/dateInfo/clientBasicDateInfo/ClientCreate.php';
require_once $srcDir.'classes/Client/client/clientData/dateInfo/clientBasicDateInfo/ClientUpdate.php';
require_once $srcDir.'classes/Client/client/clientData/dateInfo/ClientBasicDateInfo.php';
require_once $srcDir.'classes/Client/client/clientData/dateInfo/Validity.php';
require_once $srcDir.'classes/Client/client/clientData/ClientDateInfo.php';
require_once $srcDir.'classes/Client/client/clientData/ClientInfo.php';
require_once $srcDir.'classes/Client/client/ClientData.php';
require_once $srcDir.'classes/Client/client/ClientID.php';
require_once $srcDir.'classes/Client/Client.php';


$router = new Router();
Registry::set('router', $router);

$router->setPath($srcDir.'controllers');
$router->delegate();
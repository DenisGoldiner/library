<?php
require_once __DIR__.'/../core/Controller.php';
require_once __DIR__.'/../core/View.php';
require_once __DIR__.'/registration.php';
require_once __DIR__ . '/../models/registration_model.php';
require_once __DIR__ . '/../components/DBConnector.php';

$reg = new Controller_Registration();
$reg->actionRegister();
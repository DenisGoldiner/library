<?php
require_once __DIR__.'/../core/Controller.php';
require_once __DIR__.'/../core/View.php';
require_once __DIR__.'/registration.php';

$reg = new Controller_Registration();
$reg->actionRegister();
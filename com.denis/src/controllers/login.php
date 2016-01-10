<?php

/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 09.01.2016
 * Time: 17:58
 */
class Controller_Login extends Controller
{
    function index() {
        $this->view->generate('login_view.php');
    }
}
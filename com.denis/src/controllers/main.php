<?php

/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 06.01.2016
 * Time: 18:00
 */

class Controller_Main extends Controller {
    function index() {
        $this->view->generate('main_view.php');
    }
}

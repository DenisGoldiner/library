<?php
/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 09.01.2016
 * Time: 17:57
 */

class Controller_Registration extends Controller {
    function index() {
        $this->view->generate('registration_view.php');
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 09.01.2016
 * Time: 17:59
 */
class Controller_Bookshelf extends Controller
{
    function index() {
        $booksList = array();
        $booksList = bookshelf_model::getBooksList();
        $this->view->generate('bookshelf_view.php', $booksList);
    }
}
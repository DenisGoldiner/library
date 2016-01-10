<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.12.2015
 * Time: 1:54
 */
class View
{

    /*
    $content_file - виды отображающие контент страниц;
    $template_file - общий для всех страниц шаблон;
    $data - массив, содержащий элементы контента страницы. Обычно заполняется в модели.
    */
   // function generate($content_view, $template_view, $data = null)
    function generate($content_view, $data = null)
    {

        include_once __DIR__.'\..\views\\'.$content_view;
    }
}
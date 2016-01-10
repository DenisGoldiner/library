<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:47
 */
class BookCreate
{
    private $bookCreateDate;

    /**
     * BookCreate constructor.
     * @param $bookCreateDate
     */
    public function __construct($bookCreateDate)
    {
        $this->bookCreateDate = $bookCreateDate;
    }
}
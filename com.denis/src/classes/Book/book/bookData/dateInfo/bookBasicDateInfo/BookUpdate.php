<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:47
 */
class BookUpdate
{
    private $bookUpdateDate;

    /**
     * BookUpdate constructor.
     * @param $bookUpdateDate
     */
    public function __construct($bookUpdateDate)
    {
        $this->bookUpdateDate = $bookUpdateDate;
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:14
 */
class AuthorCreate
{
    private $authorCreateDate;

    /**
     * AuthorCreate constructor.
     * @param $authorCreateDate
     */
    public function __construct($authorCreateDate)
    {
        $this->authorCreateDate = $authorCreateDate;
    }
}
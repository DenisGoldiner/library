<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:14
 */
class AuthorUpdate
{
    private $authorUpdateDate;

    /**
     * AuthorUpdate constructor.
     * @param $authorUpdateDate
     */
    public function __construct($authorUpdateDate)
    {
        $this->authorUpdateDate = $authorUpdateDate;
    }
}
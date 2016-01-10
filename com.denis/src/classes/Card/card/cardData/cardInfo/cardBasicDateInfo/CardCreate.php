<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:31
 */
class CardCreate
{
    private $cardCreateDate;

    /**
     * CardCreate constructor.
     * @param $cardCreateDate
     */
    public function __construct($cardCreateDate)
    {
        $this->cardCreateDate = $cardCreateDate;
    }
}
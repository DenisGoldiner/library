<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:31
 */
class CardUpdate
{
    private $cardUpdateDate;

    /**
     * CardUpdate constructor.
     * @param $cardUpdateDate
     */
    public function __construct($cardUpdateDate)
    {
        $this->cardUpdateDate = $cardUpdateDate;
    }
}
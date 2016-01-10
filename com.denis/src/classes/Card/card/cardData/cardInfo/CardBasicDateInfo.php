<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:31
 */
class CardBasicDateInfo
{
    private $cardCreate;
    private $cardUpdate;

    /**
     * CardBasicDateInfo constructor.
     * @param $cardCreate
     * @param $cardUpdate
     */
    public function __construct(CardCreate $cardCreate,CardUpdate $cardUpdate)
    {
        $this->cardCreate = $cardCreate;
        $this->cardUpdate = $cardUpdate;
    }
}
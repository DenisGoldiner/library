<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 15:45
 */
class ClientCreate
{
    private $clientCreateDate;

    /**
     * ClientCreate constructor.
     * @param $clientCreateDate
     */
    public function __construct($clientCreateDate)
    {
        $this->clientCreateDate = $clientCreateDate;
    }
}
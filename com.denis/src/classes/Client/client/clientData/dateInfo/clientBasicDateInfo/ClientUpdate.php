<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 15:46
 */
class ClientUpdate
{
    private $clientUpdateDate;

    /**
     * ClientUpdate constructor.
     * @param $clientUpdateDate
     */
    public function __construct($clientUpdateDate)
    {
        $this->clientUpdateDate = $clientUpdateDate;
    }
}
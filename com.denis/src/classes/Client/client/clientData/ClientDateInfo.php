<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 15:43
 */
class ClientDateInfo
{
    private $clientBasicDateInfo;
    private $validity;

    /**
     * ClientDateInfo constructor.
     * @param $clientBasicDateInfo
     * @param $validity
     */
    public function __construct(ClientBasicDateInfo $clientBasicDateInfo,Validity $validity)
    {
        $this->clientBasicDateInfo = $clientBasicDateInfo;
        $this->validity = $validity;
    }
}
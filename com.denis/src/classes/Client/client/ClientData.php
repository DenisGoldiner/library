<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 16:03
 */
class ClientData
{
    private $clientDateInfo;
    private $ClientInfo;

    /**
     * ClientData constructor.
     * @param $clientDateInfo
     * @param $ClientInfo
     */
    public function __construct(ClientDateInfo $clientDateInfo,ClientInfo $ClientInfo)
    {
        $this->clientDateInfo = $clientDateInfo;
        $this->ClientInfo = $ClientInfo;
    }
}
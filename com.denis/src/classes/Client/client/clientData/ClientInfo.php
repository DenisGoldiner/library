<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 15:42
 */
class ClientInfo
{
    private $clientCard;
    private $clientName;

    /**
     * ClientInfo constructor.
     * @param $clientCard
     * @param $clientName
     */
    public function __construct(ClientCard $clientCard,ClientName $clientName)
    {
        $this->clientCard = $clientCard;
        $this->clientName = $clientName;
    }
}
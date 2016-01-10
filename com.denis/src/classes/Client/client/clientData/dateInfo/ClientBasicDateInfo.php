<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 15:44
 */
class ClientBasicDateInfo
{
    private $clientCreate;
    private $clientUpdate;

    /**
     * ClientBasicDateInfo constructor.
     * @param $clientCreate
     * @param $clientUpdate
     */
    public function __construct(ClientCreate $clientCreate,ClientUpdate $clientUpdate)
    {
        $this->clientCreate = $clientCreate;
        $this->clientUpdate = $clientUpdate;
    }
}
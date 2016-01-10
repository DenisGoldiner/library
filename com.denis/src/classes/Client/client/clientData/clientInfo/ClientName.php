<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 15:47
 */
class ClientName
{
    private $clientFirstName;
    private $clientLastName;

    /**
     * ClientName constructor.
     * @param $clientFirstName
     * @param $clientLastName
     */
    public function __construct(ClientFirstName $clientFirstName,ClientLastName $clientLastName)
    {
        $this->clientFirstName = $clientFirstName;
        $this->clientLastName = $clientLastName;
    }


}
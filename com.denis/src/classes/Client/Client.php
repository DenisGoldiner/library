<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 28.11.2015
 * Time: 15:40
 */
class Client
{
    private $clientName;
    private $clientSurname;
    private $clientEmail;
    private $clientPassword;

    /**
     * Client constructor.
     * @param $clientName
     * @param $clientSurname
     * @param $clientPassword
     * @param $clientEmail
     */
    public function __construct($clientName, $clientSurname, $clientEmail, $clientPassword)
    {
        $this->clientName = $clientName;
        $this->clientSurname = $clientSurname;
        $this->clientPassword = $clientPassword;
        $this->clientEmail = $clientEmail;
    }


    public static function checkClientName($clientName){
        $result = false;
		$mask = '/^[A-Z][a-z]*$/';
        if(strlen($clientName) > 2 && preg_match($mask, $clientName)){
            $result = true;
        }
        return $result;
    }

	public static function checkClientFirstName($clientFirstName){
        $result = false;
		$mask = '/^[A-Z][a-z]*$/';
        if(strlen($clientFirstName) > 2 && preg_match($mask, $clientFirstName)){
            $result = true;
        }
        return $result;
    }
	
    public static function checkClientPassword($pass){
        $result = false;
		$mask = '/^[a-zA-Z0-9]*$/';
        if(strlen($pass) > 5 && preg_match($mask, $pass)){
            $result = true;
        }
        return $result;
    }

    public static function checkClientEmail($email){
        $result = false;
        $mask = '/^(?:[a-zA-Z][a-zA-Z0-9_]{1,})@(?:[a-z]{2,})\.(?:[a-z]{2,})$/';
        if(preg_match($mask, $email)){
            $result = true;
        }
        return $result;
    }


}
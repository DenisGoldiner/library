<?php

/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 09.01.2016
 * Time: 18:13
 */
class registration_model
{
    public static function checkClientExistence($email){
//        include_once __DIR__.'/../components/DBConnector.php';   ?????????
//        $booksList = array();
        $result = false;

        $dataBase = DBConnector::getConnection();
        $querry = $dataBase->query("SELECT * from client WHERE client_email = 'Krit@gmail.com' ");

        if($querry != false){
            $result = true;
        }

        var_dump($email);
        var_dump($querry);
        var_dump($result);

        return $result;
    }
}
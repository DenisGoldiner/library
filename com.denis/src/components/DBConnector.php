<?php

/**
 * Created by PhpStorm.
 * User: Denis
 * Date: 30.11.2015
 * Time: 11:31
 */
class DBConnector
{

    public static function getConnection(){
        //$paramsPath = WEB_PATH.'config/db_params.php';
        $paramsPath = __DIR__.'/../config/db_params.php';
        $params = include_once($paramsPath);

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $dataBase = new PDO($dsn, $params['user'], $params['password']);

        return $dataBase;
    }

}
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
        $sql = "SELECT COUNT(*) from client WHERE client_email = '{$email}' ";
        $querry = $dataBase->query($sql);

        if ($querry->fetchColumn() > 0) {
            $result = true;
        }

        /*
        if($querry != false){
            foreach($querry as $row){
                echo 'Name == '.$row['client_name'];
                $result = true;
            }

        }
*/
        /*
        var_dump($email);
        var_dump($querry);
        var_dump($result);
*/
        return $result;
    }
}
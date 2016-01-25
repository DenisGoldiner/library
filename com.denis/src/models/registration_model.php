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
        return $result;
    }

    public static function registerClient($name, $surname, $email, $password, $card){
        $dataBase = DBConnector::getConnection();

        $card = self::getCardId($card);

        $sql = "INSERT INTO CLIENT (client_name, client_surname, client_email, client_password, card_id) VALUES ('{$name}', '{$surname}', '{$email}', '{$password}', '{$card}' )";

        $result = $dataBase->query($sql);

        if ($result == 'true') {
            echo "Ваши данные успешно добавлены";
        } else{
            echo $sql.'<br/>';
            echo "Ваши данные не добавлены".'<br/>';
            var_dump($result);
        }

    }

    private static function getCardId($cardName){
        $result = '';
        if($cardName == "green"){
            $result = 1;
        } else if($cardName == "gold"){
            $result = 2;
        } else if($cardName == "platinum"){
            $result = 3;
        }
        return $result;
    }

}
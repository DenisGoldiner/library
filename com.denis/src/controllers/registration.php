<?php
/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 09.01.2016
 * Time: 17:57
 */

class Controller_Registration extends Controller {

    function index() {
        $this->view->generate('registration_view.php');
    }

    public function actionRegister()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $firstName = $_POST['firstName'];

        echo $name;
        echo $email;
        echo $firstName;
        /*
        // Переменные для формы
        $name = false;
        $email = false;
        $password = false;
        $result = false;
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $email = $_POST['email'];
            $firstName = $_POST['firstName'];

            echo $name;
            echo $email;
            echo $firstName;
        }
        // Подключаем вид
        //$this->index();
        return true;
        */
    }
}

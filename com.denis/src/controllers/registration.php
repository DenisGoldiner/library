<?php
/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 09.01.2016
 * Time: 17:57
 */

class Controller_Registration extends Controller {

    function index($data = null) {
        $this->view->generate('registration_view.php', $data);
    }

    public function actionRegister()
    {
        //var_dump($_POST);

        //define('WEB_PATH', '/com.denis/src/');                  //why again???
        require_once __DIR__.'/../classes/Client/Client.php';

        // Переменные для формы
        $name = '';
        $surname = '';
        $email = '';
        $password = '';
        $card = '';

		$errors = array();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $email = $_POST['email'];
            $surname = $_POST['surname'];
			$password = $_POST['password'];

            if(Client::checkClientName($name)){
                echo $name.'<br/>';
            } else{
				array_push($errors, ':: value "Name" is incorrect you can use only a-z<br/>
									    letters and first letter should be capital');
			}
			
			if(Client::checkClientFirstName($surname)){
                echo $surname.'<br/>';
            } else{
				array_push($errors, ':: value "Surname" is incorrect you can use only a-z<br/>
									    letters and first letter should be capital');				
			}

            if(Client::checkClientEmail($email)){

                if(!registration_model::checkClientExistence($email)){
                    echo $email.'<br/>';
                } else{
                    array_push($errors, ':: You can not register on this email');
                }

            } else{
				array_push($errors, ':: value "Email" is incorrect it should be in form
									    someText@mail.country');				
			}
			
			if(Client::checkClientPassword($password)){
				echo $password.'<br/>';
			} else{
				array_push($errors, ':: value "Password" is incorrect you can use only a-z<br/>
									    letters, 0-9 numbers and it\'s length should be more then 5');				
			}

            if(!empty($_POST['card'])){
                $card = $_POST['card'];
                echo $card.'<br/>';
            } else{
                array_push($errors, ':: chose card type');
            }


			if(empty($errors)){
                registration_model::registerClient($name, $surname, $email, $password, $card);
			}

        }

        $args = array();
        $args['errors'] = $errors;
        $args['name'] = $name;
        $args['surname'] = $surname;
        $args['email'] = $email;
        $args['password'] = $password;

        // Подключаем вид
        $this->index($args);
        return true;

    }
}

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

        define('WEB_PATH', '/com.denis/src/');                  //why again???
        require_once __DIR__.'/../classes/Client/Client.php';

        // Переменные для формы
        $name = '';
        $firstName = '';
        $email = '';
        $password = '';
		
		$errors = array();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $email = $_POST['email'];
            $firstName = $_POST['firstName'];
			$password = $_POST['password'];

            if(Client::checkClientName($name)){
                echo $name.'<br/>';
            } else{
				array_push($errors, ':: value "Name" is incorrect you can use only a-z<br/>
									    letters and first letter should be capital');
			}
			
			if(Client::checkClientFirstName($firstName)){
                echo $firstName.'<br/>';
            } else{
				array_push($errors, ':: value "FirstName" is incorrect you can use only a-z<br/>
									    letters and first letter should be capital');				
			}

            if(Client::checkClientEmail($email)){
                echo $email.'<br/>';
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
			
			if(empty($errors)){
                //array_push($errors, 'Please, fill the form to continue, required is marked by <em>*</em>');
                /*
				echo '<br>Error:<br/>';
				foreach($errors as $error){
					echo $error.'<br/>';					
				}
*/
			}

        }

        $args = array();
        $args['errors'] = $errors;
        $args['name'] = $name;
        $args['firstName'] = $firstName;
        $args['email'] = $email;
        $args['password'] = $password;

        // Подключаем вид
        $this->index($args);
        return true;

    }
}

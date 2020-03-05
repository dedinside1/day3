<?php
class Controller_Login extends Controller
{

	function __construct()
	{
		$this->model = new Model_Login();
		$this->view = new View();
	}

	function action_index()
	{


		if(isset($_POST['submitlogin'])) {
					$login = $_POST['login'];
					$password = $_POST['password'];
					if ($this->model->Login($login, $password)) {
						header('Location:'.'/');
					} else {
						$messege ='Ошибка авторизации';
					}
					//$this->model->LoginAdmin($login, $password);
					//header('Location:'.'/');
				}

	$this->view->generate('login_view.php', 'template_view.php');

		}



	}

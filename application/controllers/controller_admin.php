<?php
require_once 'application/models/model_admin.php';
class Controller_Admin extends Controller
{

	function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}

	function action_index()
	{

		$data = $this->model->get_data();
		$this->view->generate('admin_view.php', 'template_view.php', $data);

		if(isset($_POST['submitlogin'])) {
					$login = $_POST['login'];
					$password = $_POST['password'];
      		//Model_Admin::LodinAdmin($Login, $password);
					$this->model->LodinAdmin($Login, $password);
        }
		if(isset($_POST['submitupd'])) {
          $id = $_POST['id'];
          $Year = $_POST['Year'];
					$Site = $_POST['Site'];
					$Description = $_POST['Description'];
          $this->model->UpdateInfo($id, $Year, $Site, $Description);
	}
}
}

<?php
class Controller_Admin extends Controller
{

	function __construct()
	{
		$this->model = new Model_Admin();
		$this->view = new View();
	}

	function action_index()
	{
		if(isset($_POST['submitadd'])) {
        	$Year = $_POST['Year'];
					$Site = $_POST['Site'];
					$Description = $_POST['Description'];
					    var_dump($Year, $Site, $Description);
        	$this->model->AddInfo($Year, $Site, $Description);
}
	$this->view->generate('addportfolio_view.php', 'template_view.php');





	}

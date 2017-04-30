<?php 

	class Controller_View  {

		function __construct() {

		$this->model = new Model();
		$this->view = new View();
		
		

	}

	public function action() {
		$id = $_GET['id'];	
		$data = $this->model->get_data_by_id($id);
		$this->view->render('view_view.php', 'template_view.php', $data);
	}

	
}

 ?>
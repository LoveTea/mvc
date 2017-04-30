<?php 

	class Controller_News {

		function __construct() {

		$this->model = new Model();
		$this->view = new View();
		
	}

	public function action() {

		$data = $this->model->get_data();
		$count = $this->model->get_count_of_pages();
		$this->view->render('news_view.php', 'template_view.php', $data, $count);

	}

	
}

 ?>
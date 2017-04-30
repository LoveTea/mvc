<?php 

	class Model {

		public function get_data() {
			return Database::get_data();
		}

		public function get_data_by_id($id) {
			$id = htmlspecialchars($id);

			return Database::get_data_by_id($id);			
		}

		public function get_count_of_pages() {
			return Database::get_count_of_pages();
		}

	}

 ?>
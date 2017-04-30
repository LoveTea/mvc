<?php 
	
	class Database {


			public static  function get_data() {

				$connect = new PDO('mysql:host=localhost;dbname=techart', "root", "");
				$query = $connect->query('SELECT id,idate, title, announce FROM news ORDER BY idate DESC');
				while($row = $query->fetch()) {
					$news[] = $row;
				}


				if( !isset($_GET['page']) ) $page = 1;
				else $page = $_GET['page'];

				$algorithm = $page * 5 - 5;			// Нахождение индекса массива для текущей станицы
				$data = array_slice($news, $algorithm, 5);				

				return $data;
			}

			public static  function get_data_by_id($id) {
				$connect = new PDO("mysql:host=localhost;dbname=techart", "root", "");
				$query = $connect->query("SELECT id,idate, title, announce, content FROM news WHERE id = '$id' ");
				while($row = $query->fetch()) {
					$data[] = $row;
				}
				return $data;
			}

			public static function get_count_of_pages() {
				$connect = new PDO('mysql:host=localhost;dbname=techart', "root", "");
				$query = $connect->query("SELECT COUNT(*) FROM news");
				$row = $query->fetch();
				$count = ceil($row[0] / 5);			//Расчет колличества страниц

				return $count;

			}

	}

 ?>
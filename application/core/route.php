<?php 
	
	class Route {

		public static function start() {

			$controller_name = "news";


			$routes = explode('/', $_SERVER['REQUEST_URI']);
			$routes = explode('.', $routes[1]);
			

			if( !empty($routes[0]) ) {
				$controller_name = $routes[0];
			}

			
			$controller_name = 'Controller_'.$controller_name;

			$controller_file = strtolower($controller_name).'.php';
			$controller_path = "application/controllers/".$controller_file;

			if(file_exists($controller_path)) {

			include $controller_path;
			}
			

			$controller = new $controller_name;
			$controller->action();
		
		
			
		}
	}


 ?>
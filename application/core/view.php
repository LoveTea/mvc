<?php 

	class View {

		function render($content_view, $template_view, $data = null, $count_of_pages = null) {
		
		
		include 'application/views/'.$template_view;
		}
	}

 ?>
<?php  

	spl_autoload_register(function($class_name){

		//$filename = "class" . DIRECTORY_SEPARATOR . $class_name . ".php";   Usado para Windows
		$filename = str_replace ("\\", "/", "class" . DIRECTORY_SEPARATOR . $class_name . ".php"); // Usado para o Linux
		
		//var_dump($class_name);

		if(file_exists($filename)){
			require_once($filename);
		}
	});
?>
<?php 
	session_start();
	spl_autoload_register(function($class_name){
		$class_name = lcfirst($class_name);
		$class_name = str_replace('_','/', $class_name);
		include $class_name.".php";
	});
	
	$path = substr($_SERVER['REQUEST_URI'], 1);
	$path = explode('/', $path);
	
	
	new System_routes($path);
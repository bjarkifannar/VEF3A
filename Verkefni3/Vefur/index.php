<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	spl_autoload_register(function ($class) {
		$parts = explode('\\', $class);
		//include $class.'.php';
		include $parts[0].'/'.$parts[1].'.php';
	});

	$model = new Model\BookModel();
	$controller = new Controller\BookController($model);
	$view = new View\BookView($model);
	echo $view->output();
?>
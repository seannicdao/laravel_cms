<?php
	$myArray = array('Text One', 'Text Two', 'Text Three'); $hello = "hey there!";

	$libs_dir = app_path().'/libs/';
	foreach (glob($libs_dir.'*.php') as $filename) {
		require_once $filename;
	}

	$compiler = new SN_Compiler();

	//HAML Compiler
	$source_dir = app_path()."/assets/haml/*";
	$destination_dir = app_path()."/views/";
	if ($compiler->compile_dir($source_dir, $source_dir, $destination_dir)) {
		header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit();
	}

	//CoffeeScript Compiler
	$source_dir = app_path()."/assets/coffee/*";
	$destination_dir = public_path()."/js/";
	if ($compiler->compile_dir($source_dir, $source_dir, $destination_dir))
		echo "updated";
?>
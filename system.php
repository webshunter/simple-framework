<?php 


// view as blade.php

function view($path){

    $timeload = date('Ymdhis');

	$path = '../view/'.$path;

	if (isset($_SERVER['CONTEXT_DOCUMENT_ROOT'])) {
		$path = str_replace("/public/index.php", "", $_SERVER['PHP_SELF']).'/view/'.$path;
		$path = $_SERVER['CONTEXT_DOCUMENT_ROOT'].$path;
	}

	$path = $path.'.blade.php';
	$myfile = fopen($path, 'r') or die("Unable to open file!");
	$file = fread($myfile,filesize($path));
	fclose($myfile);

	$file = str_replace("{!", "<?php ", $file);
	$file = str_replace("!}", " ?> ", $file);
	$file = str_replace("{{", " <?= ", $file);
	$file = str_replace("}}", " ?> ", $file);
    $file = str_replace("--}", "?> ", $file);
    $file = str_replace("{--", " <?php", $file);

	if (isset($_SERVER['CONTEXT_DOCUMENT_ROOT'])) {
		$myfile = fopen($_SERVER['CONTEXT_DOCUMENT_ROOT'].str_replace("/public/index.php", "", $_SERVER['PHP_SELF'])."/chunk/view".$timeload.".php", "w") or die("Unable to open file!");
		fwrite($myfile, $file);
		fclose($myfile);
		require_once($_SERVER['CONTEXT_DOCUMENT_ROOT'].str_replace("/public/index.php", "", $_SERVER['PHP_SELF'])."/chunk/view".$timeload.".php");
	    unlink($_SERVER['CONTEXT_DOCUMENT_ROOT'].str_replace("/public/index.php", "", $_SERVER['PHP_SELF'])."/chunk/view".$timeload.".php");
	}else{
		$myfile = fopen("../chunk/view".$timeload.".php", "w") or die("Unable to open file!");
		fwrite($myfile, $file);
		fclose($myfile);
		require_once("../chunk/view".$timeload.".php");
		unlink("../chunk/view".$timeload.".php");
	}
}

// route system

class Route{

	private $path = null;
	private $err404 = null;
	
	function __construct(){
		$this->path();
	}

	// find path of root

	private function path(){
		$this->path = str_replace("/public/index.php", "", $_SERVER['PHP_SELF']); 
	}


	// add new root config

	public function add($name = '', $method=null){
		$this->{$name} = $method;
	}

	// default 404 page not found

	private function func404(){
		echo "laman your request not found";
	}

	// set function call on class object

	function __call($name, $arguments){
		return call_user_func($this->{$name}, $arguments);
	}

	// run class route if calss called

	function __destruct(){
		$route = str_replace($this->path, "", $_SERVER['REQUEST_URI']); 
		if(isset($this->$route)){
			$this->$route();
		}else{
			$this->func404();
		}
	}

}

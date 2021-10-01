<?php

$route = new Route;

// home dash
$route->add('/', function(){

	view('page.dashboard');

});

// developer editor
$route->add('/developer-login-area', function(){

	view('dev.login');

});

// developer editor
$route->add('/developer-mode', function(){

	view('dev.editor');

});
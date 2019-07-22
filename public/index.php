<?php
require __DIR__ . '/../bootstrap.php';


$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);

$controller = isset($url[0]) && $url[0] ? $url[0] : 'home';
$action     = isset($url[1]) && $url[1] ? $url[1] : 'index';
$param      = isset($url[2]) && $url[2] ? $url[2] :  null;


if(!class_exists($controller = "Dynamische\Controller\\". ucfirst($controller) . 'Controller')):
	//die("404 - Pagina não encontrada");
	print (new \Dynamische\View\View('404.phtml'))->render();
	die;


endif;

if(!method_exists($controller, $action)):
	$action = 'index';
	$param  = $url[1];
endif;


$response = call_user_func_array([new $controller, $action], [$param]);

print $response;


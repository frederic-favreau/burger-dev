<?php
require_once './vendor/autoload.php';

$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'RecipeController';
$action = isset($_GET['action']) ? ($_GET['action']) : 'hello';
 
$controllerInstance =  new $controller();

if(is_callable(array($controllerInstance, $action))){
    echo call_user_func(array($controllerInstance, $action));
} else {
    echo 'pas ok';
}











<?php
require_once './vendor/altorouter/altorouter/AltoRouter.php';
require_once './vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/php/router');

$router->map('GET', '/', 'PostController#homePage');

$match = $router->match();

if(is_array($match)){
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller();

    if(is_callable(array($obj, $action))) {
        call_user_func_array(array($obj, $action), $match['params']);
    }
}

// $controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) . 'Controller' : 'RecipeController';
// $action = isset($_GET['action']) ? ($_GET['action']) : 'hello';
 
// $controllerInstance =  new $controller();

// if(is_callable(array($controllerInstance, $action))){
//     echo call_user_func(array($controllerInstance, $action));
// } else {
//     echo 'pas ok';
// }





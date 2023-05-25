<?php
        session_start();
require_once './vendor/altorouter/altorouter/AltoRouter.php';
require_once './vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/projet/burger-dev');

$router->map('GET', '/', 'HomeController#homePage', 'home');

$router->map('GET', '/recipe/', '', 'baseRecipe');
$router->map('GET', '/recipe/[i:id]', 'RecipeController#getOne', '');

$router->map('GET|POST' , '/login' , 'UserController#login' , 'login');
$router->map('GET' , '/logout' , 'UserController#logout' , 'logout');

$router->map('GET|POST' , '/registration' , 'UserController#createUser' , 'registration');

$router->map('GET', '/search', 'SearchController#searchResult', 'search');

$router->map('GET|POST', '/addrecipe', 'RecipeController#createRecipe', 'recipeAdd');

$match = $router->match();

if (is_array($match)) {
    list($controller, $action) = explode('#', $match['target']);
    $obj = new $controller();

    if (is_callable(array($obj, $action))) {
        call_user_func_array(array($obj, $action), $match['params']);
    }
}

<?php 
require_once 'vendor/autoload.php';
require_once 'Configuration.php';
use App\Core\DatabaseConfiguration;
use App\Core\DatabaseConnection;
use App\Models\CategoryModel;
use App\Controllers\MainController;
use App\Core\Router;

$databaseConfiguration = new DatabaseConfiguration(
    Configuration::DATABASE_HOST,
    Configuration::DATABASE_USER,
    Configuration::DATABASE_PASS,
    Configuration::DATABASE_NAME
);
$databaseConnection = new DatabaseConnection($databaseConfiguration);

$url = strval(filter_input(INPUT_GET,'URL'));
$http = filter_input(INPUT_SERVER,'REQUEST_METHOD');

$router = new Router();
$routes = require_once 'Routes.php';
foreach($routes as $route){
    $router->add($route);
}

$route = $router->find($http, $url);
$arguments = $route->extractArguments($url);

$fullControllerName = '\\App\\Controllers\\'. $route->getControllerName() . 'Controller';
$controller = new $fullControllerName($databaseConnection);
call_user_func_array([$controller, $route->getMethodName()], $arguments);
$data = $controller->getData();



$loader = new \Twig\Loader\FilesystemLoader('./Views');
$twig = new \Twig\Environment($loader, [
    "cache" => './PHP/twig-cache',
    "auto_reload" =>true
]);

echo $twig->render($route->getControllerName() . '/' . $route->getMethodName() . '.html', $data);


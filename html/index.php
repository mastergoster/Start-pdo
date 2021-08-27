<?php


use App\Controller\HomeController;
use App\Controller\UserController;
use Core\Controller\RouteurController;

define("ROOT", dirname(__DIR__));

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $class = str_replace('App', 'src', $class);
    $class = str_replace('Core', 'core', $class);
    if (file_exists(ROOT . '/' . $class . '.php')) {
        include(ROOT . '/' . $class . '.php');
    } else {
        throw new \Exception('Class ' . $class . ' not found');
    }
});

$routeur = new RouteurController();
$routeur
    ->add('/', HomeController::class, 'index')
    ->add('/login', UserController::class, 'login');

try {
    $routeur->run();
} catch (Exception $e) {
    echo "<h1 style='text-align: center;'>" . $e->getMessage() . "</h1>";
}

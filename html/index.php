<?php

use Core\Routeur;
use App\Controller\HomeController;
use App\Controller\UserController;

define("ROOT", dirname(__DIR__));
include(ROOT . "/app.php");
$routeur = new Routeur();
$routeur
    ->add('/', HomeController::class, 'index')
    ->add('/login', UserController::class, 'login');

try {
    $routeur->run();
} catch (Exception $e) {
    echo "<h1 style='text-align: center;'>" . $e->getMessage() . "</h1>";
}

<?php

use App\Controllers\MainController;
use Core\App;

require_once "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();
$main = new MainController;
$app = new App;
$app->run();

//dd($main);
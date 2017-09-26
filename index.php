<?php

### ligne à désactiver hors debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
###

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as DB;
use genea\Vue\Vue as Vue;
use Slim\Slim as Slim;



$app = new Slim();
$vue = new Vue();

$app->get('/', function() {
	global $vue, $app;
    echo $vue->render($app, "", "index");
})->name("racine");

$app->run();

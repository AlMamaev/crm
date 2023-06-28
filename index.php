
<?php
session_start();

require_once 'config.php';
require_once 'autoload.php';
require_once 'functions.php';
require_once 'app\router.php';

$router = new app\Router();
$router->run();
?>

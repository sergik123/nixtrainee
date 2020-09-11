
<?php
ini_set('display_errors', 1);
define(ROOT, __DIR__);
require_once ROOT.'/app/autoload.php';
require_once ROOT.'/core/Router.php';
require_once ROOT.'/core/ActiveRecord.php';
$router = new Router;
$router->start();

<?php
require __DIR__ . '/autoload.php';

$cont = isset($_GET['cont']) ? $_GET['cont'] : 'news';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$contName = 'Controller' . $cont;
$controller = new $contName;
$method = 'action' . $act;
$controller->$method();

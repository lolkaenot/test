<?php
error_reporting(E_ALL);
require __DIR__ . '/autoload.php';
session_start();
$_SESSION['admin']=1;
$cont = isset($_GET['cont']) ? $_GET['cont'] : 'news';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';
if (isset($_SESSION['admin'])) {
    $cont = 'Admin';
}

//$q= News::findByColumn('title', 'ШОК!!!');
//foreach ($q as $a) {
//    echo $a->title . '<br>';
//    echo $a->text . '<br>';
//}
//


$contName = $cont . 'Controller';
$controller = new $contName;
$method = 'action' . $act;
$controller->$method();

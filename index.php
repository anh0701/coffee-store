<?php
session_start();
require_once('lib/model.php');
require_once('website/models/cart.php');
require "lib/header.php";
require "lib/counter.php";
$count_file='counter.txt';
$ip_file = 'ip.txt';
function counting_ip(){
    $ip= $_SERVER['REMOTE_ADDR'];
    global $count_file, $ip_file;

    if(!in_array($ip,file($ip_file,FILE_IGNORE_NEW_LINES))){
        $current_val = (file_exists($count_file)) ? file_get_contents($count_file):0;
        file_put_contents($ip_file,$ip."\n",FILE_APPEND);
        file_put_contents($count_file,++$current_val);
    }
}
counting_ip();

$controller = 'home';
if(!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
}

$action = 'index';
if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}
$file = 'website/controllers/'.$controller.'/'.$action.'.php';

if (file_exists($file)) {
    require($file);
} else {
    show_404();
}

?>

<?php
//load model
require_once('admin/models/users.php');
if (!empty($_POST)) {
    $email = escape($_POST['email']);
    $password = md5($_POST['password']);
    user_login($email, $password);
}

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    if ($user['RoleId']==1||$user['RoleId']==2){
    header('location:admin.php');
    }
}
$title = 'Administrator';
require('admin/views/home/login.php');
?>


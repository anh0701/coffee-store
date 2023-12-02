<?php
$title = 'Đăng nhập';
require_once('website/models/login.php');
if (!empty($_POST)) {
    $email = escape($_POST['email']);
    $password = md5($_POST['password']);
    user_login($email, $password);
}

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    if ($user['RoleId']==2){
        header('location:home');
    }
    else if ($user['RoleId']==1){
        header('location:admin.php');
    }
}
require('website/views/login/index.php');
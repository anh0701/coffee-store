<?php
$title = 'Đăng ký';
require_once('website/models/login.php');
if (!empty($_POST)) {
    $email = escape($_POST['email']);
    if($_POST['password1'] == $_POST['password2']){   
        $password = md5($_POST['password1']);
        $name = $_POST['name'];
        $username = $_POST['username'];
        user_signup($email, $username, $name, $password);
        header('location:login');
        // user_login($email, $password);
    }
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
require('website/views/signup/index.php');
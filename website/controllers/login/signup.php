<?php
$title = 'Đăng kí';
require_once('website/models/login.php');
if (!empty($_POST)) {
    if($_POST['password1'] == $_POST['password2']){
        $email = escape($_POST['email']);
        $password = md5($_POST['password1']);
        user_signup($email, $password);
        
        user_login($email, $password);
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
require('website/views/login/signup.php');
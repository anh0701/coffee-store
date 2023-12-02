<?php
//load model
require_once('admin/models/users.php');
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'Danh sách quản trị viên';
$user = $_SESSION['user'];
$list_user = get_all('user', $options);
//load view
require('admin/views/user/list.php');
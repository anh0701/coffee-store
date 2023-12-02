<?php
//load model
require_once('admin/models/users.php');
$title = 'Thông tin cá nhân';
if (isset($_GET['uid'])) $uid = intval($_GET['uid']); else $uid=0;
$user = $_SESSION['user'];
$user_info = get_a_record('user', $uid);
//load view
require('admin/views/user/info.php');
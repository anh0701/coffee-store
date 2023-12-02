<?php
//load model
require_once('admin/models/users.php');
$uid = intval($_GET['uid']);
user_delete($uid);
header('location:admin.php?controller=user&action=list');
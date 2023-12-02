<?php
require_once('admin/models/roles.php');
if (isset($_POST['rid'])) {
    foreach ($_POST['rid'] as $rid) {
        $rid = intval($rid);
        role_delete($rid);
    }
}
$url = 'admin.php?controller=role';
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'Danh sách quyền truy cập website';
$user = $_SESSION['user'];
$roles = get_all('role', $options);
require('admin/views/role/index.php');
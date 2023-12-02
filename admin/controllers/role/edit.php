<?php
//load model
require_once('admin/models/roles.php');
if (!empty($_POST)) {
    $role = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'Description' => ($_POST['description'])
    );
    save('role', $role);
    header('location:admin.php?controller=role');
} else {
}
if (isset($_GET['rid'])) $rid = intval($_GET['rid']); else $rid=0;
$title = ($rid==0) ? 'Thêm quyền truy cập' : 'Sửa quyền truy cập';
$user = $_SESSION['user'];
$role = get_a_record('role', $rid);
//load view
require('admin/views/role/edit.php');
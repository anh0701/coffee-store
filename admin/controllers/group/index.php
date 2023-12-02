<?php
//load model
require_once('admin/models/groups.php');

if (isset($_POST['gid'])) {
    foreach ($_POST['gid'] as $gid) {
        $gid = intval($gid);
        subcategories_delete($gid);
    }
}
$options = array(
    'order_by' => 'Id'
);
//data
$title = 'Danh mục nhóm sản phẩm';
$user = $_SESSION['user'];
$groups = get_all('subcategory', $options);
//load view
require('admin/views/group/index.php');
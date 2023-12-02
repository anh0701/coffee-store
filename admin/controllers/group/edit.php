<?php
//load model
require_once('admin/models/groups.php');
if (!empty($_POST)) {
    $subcategory = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'alias' => alias($_POST['name']),
        'CategoryId' => intval($_POST['category_id']),
        'Link' => escape($_POST['link'])
    );
    save('subcategory', $subcategory);
    header('location:admin.php?controller=group');
} else {
}
$categories = get_all('categories', array(
    'select'=>'Id,Name',
    'order_by' => 'Id'
));
if (isset($_GET['gid'])) $gid = intval($_GET['gid']); else $gid=0;
$title = ($gid==0) ? 'Thêm nhóm danh mục' : 'Sửa nhóm danh mục';
$user = $_SESSION['user'];
$group = get_a_record('subcategory', $gid);
//load view
require('admin/views/group/edit.php');
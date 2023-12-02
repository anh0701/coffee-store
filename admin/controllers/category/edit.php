<?php
//load model
require_once('admin/models/categories.php');
if (!empty($_POST)) {
    $category = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'alias' => alias($_POST['name']),
        'Position' => intval($_POST['position']),
        'alias' => escape($_POST['link'])
    );
    save('categories', $category);
    header('location:admin.php?controller=category');
} else {

}
if (isset($_GET['cid'])) $cid = intval($_GET['cid']); else $cid=0;
$title = ($cid==0) ? 'Thêm danh mục' : 'Sửa danh mục';
$user = $_SESSION['user'];
$category = get_a_record('categories', $cid);
//load view
require('admin/views/category/edit.php');
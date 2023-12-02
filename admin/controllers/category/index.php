<?php
//load model
require_once('admin/models/categories.php');
if (isset($_POST['cid'])) {
    foreach ($_POST['cid'] as $cid) {
        $cid = intval($cid);
        categories_delete($cid);
    }
}
$options = array(
    'order_by' => 'Id'
);
$title = 'Danh mục sản phẩm';
$user = $_SESSION['user'];
$categories = get_all('categories', $options);
//load view
require('admin/views/category/index.php');
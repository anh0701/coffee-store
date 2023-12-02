<?php
//load model
require_once('admin/models/products.php');
if (isset($_POST['pid'])) {
    foreach ($_POST['pid'] as $pid) {
        $pid = intval($pid);
        products_delete($pid);
    }
}
$title = 'Sản phẩm mới order';
$user = $_SESSION['user'];
require('admin/views/product/orderproduct.php');
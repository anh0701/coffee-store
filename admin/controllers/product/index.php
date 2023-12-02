<?php
//load model
require_once('admin/models/products.php');

if (isset($_POST['search'])) {
    header('location:admin.php?controller=product&search='.$_POST['search']);
}
if (isset($_POST['pid'])) {
    foreach ($_POST['pid'] as $pid) {
        $pid = intval($pid);
        products_delete($pid);
    }
}
$url = 'admin.php?controller=product';
if (isset($_GET['search'])) {
    $search = escape($_GET['search']);
    $options['where'] = "name LIKE '%$search%'";
    $url = 'admin.php?controller=product&search='.$_GET['search'];
}
//data
$title = 'Sản phẩm';
$user = $_SESSION['user'];

//load view
require('admin/views/product/index.php');



<?php
//load model
require_once('admin/models/products.php');
$pid = intval($_GET['pid']);
products_delete($pid);
header('location:admin.php?controller=product');
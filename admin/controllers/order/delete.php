<?php
$fid = intval($_GET['oid']);
require_once('admin/models/orders.php');
orders_delete($fid);
header('location:admin.php?controller=order');
?>
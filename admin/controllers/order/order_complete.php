<?php
//load model
require_once('admin/models/orders.php');

$options = array(
    'where' => 'Status = 1',
    'order_by' => 'Createtime DESC'
);
$order_complete  = get_all('orders', $options);

$title = 'Đơn hàng đã xử lý';
$user = $_SESSION['user'];
$status = array(
    0 => 'Chưa xử lý',
    1 => 'Đã xử lý'
);
//load view
require('admin/views/order/order_complete.php');
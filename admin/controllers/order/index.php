<?php
require_once('admin/models/orders.php');

if (isset($_POST['oid'])) {
    foreach ($_POST['oid'] as $oid) {
        $oid = intval($oid);
        orders_delete($oid);
    }
}
$options = array(
    'order_by' => 'Status ASC, Id DESC'
);
$url = 'admin.php?controller=order';
$total_rows = get_total('orders', $options);
$title = 'Đơn hàng';
$user = $_SESSION['user'];
$orders = get_all('orders', $options);
$status = array(
    0 => 'Chưa xử lý',
    1 => 'Đã xử lý'
);
require('admin/views/order/index.php');
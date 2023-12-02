<?php
//load model
require_once('admin/models/orders.php');
$title = 'Đơn hàng chưa xử lý';
$user = $_SESSION['user'];
//load view
require('admin/views/order/order_inprocess.php');
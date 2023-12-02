<?php
//load model
$title = 'Đơn hàng';
$cart = cart_list();
if (empty($cart)) {
	header('location:.');
}
//load view
require('website/views/cart/order.php');
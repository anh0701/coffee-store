<?php
if (!empty($_POST)) {
	$order = array(
		'Id' => 0,
		'Customer' => escape($_POST['name']),
		'Address' => escape($_POST['address']),
		'Phone' => escape($_POST['phone']),
        'Cart_total'=> $_POST['cart_total'],
		'Createtime' => gmdate('Y-m-d H:i:s', time()+7*3600)
	);
	$order_id = save('orders', $order);

	$cart = cart_list();
	foreach ($cart as $product) {
		$order_detail = array(
			'Id' => 0,
			'OrderId' => $order_id,
			'ProductId' => $product['id'],
			'Quantity' => $product['number'],
            'Price' => $product['price']
		);
		save('order_detail', $order_detail);
	}
	cart_destroy();
	//data
	$title = 'Đặt hàng thành công';
	//load view
    header( "refresh:5;url=http://localhost/coffee-store/home" );
    echo '<div style="text-align: center;padding: 20px 10px;">Cảm ơn bạn đã đặt hàng của shop. Shop sẽ confirm lại với bạn trong thời gian sớm nhất để xác nhận đơn hàng.<br>
                    Trình duyệt sẽ tự động chuyển về trang chủ sau 5s, hoặc bạn có thể click <a href="home">here</a>.</div>';
} else {
	header('location:.');
}


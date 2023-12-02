<?php
$pid = intval($_GET['id']);
cart_delete($pid);
header('location:http://localhost/coffee-store/cart');

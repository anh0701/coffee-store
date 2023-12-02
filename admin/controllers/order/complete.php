<?php
//if form submit 
if (!empty($_POST)) {
    $order = array(
        'Id' => intval($_POST['oid']),
        'Status' => 1
    );
    save('orders', $order);
}
header('location:admin.php?controller=order');
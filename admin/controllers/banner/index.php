<?php
//load model
require_once('admin/models/banners.php');

if (isset($_POST['bid'])) {
    foreach ($_POST['bid'] as $bid) {
        $bid = intval($bid);
        banner_delete($bid);
    }
}
$url = 'admin.php?controller=banner';
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'Banner';
$user = $_SESSION['user'];
$banners = get_all('banner', $options);
$status = array(
    0 => 'Chưa kích hoạt',
    1 => 'Đã kích hoạt'
);
//load view
require('admin/views/banner/index.php');
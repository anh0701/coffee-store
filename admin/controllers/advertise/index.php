<?php
//load model
require_once('admin/models/advertise.php');

if (isset($_POST['aid'])) {
    foreach ($_POST['aid'] as $bid) {
        $aid = intval($aid);
        advertise_delete($aid);
    }
}
$url = 'admin.php?controller=advertise';
$options = array(
    'order_by' => 'Id ASC'
);

$title = 'Quản trị banner quảng cáo';
$user = $_SESSION['user'];
$ads = get_all('advertise', $options);
$status = array(
    0 => 'Chưa kích hoạt',
    1 => 'Đã kích hoạt'
);
//load view
require('admin/views/advertise/index.php');
<?php
//load model
require_once('admin/models/feedbacks.php');
if (isset($_POST['fid'])) {
    foreach ($_POST['fid'] as $fid) {
        $fid = intval($fid);
        feedback_delete($fid);
    }
}
$url = 'admin.php?controller=feedback';
//data
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'Thông tin phản hồi của khách hàng';
$user = $_SESSION['user'];
$feedbacks = get_all('feedback', $options);
//load view
require('admin/views/feedback/index.php');
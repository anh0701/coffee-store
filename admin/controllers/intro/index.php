<?php
//load model
require_once('admin/models/intro.php');
if (isset($_POST['iid'])) {
    foreach ($_POST['iid'] as $iid) {
        $iid = intval($iid);
        introduction_delete($iid);
    }
}
$url = 'admin.php?controller=intro';
//data
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'Trang giới thiệu';
$user = $_SESSION['user'];
$introduction = get_all('intro', $options);

//load view
require('admin/views/intro/index.php');
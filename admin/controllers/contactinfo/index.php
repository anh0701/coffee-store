<?php
//load model
require_once('admin/models/contactinfo.php');
if (isset($_POST['iid'])) {
    foreach ($_POST['iid'] as $iid) {
        $iid = intval($iid);
        contactinfo_delete($iid);
    }
}
$url = 'admin.php?controller=contactinfo';
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'Thông tin liên hệ';
$user = $_SESSION['user'];
$contactinfor = get_all('contactinfo', $options);
//load view
require('admin/views/contactinfo/index.php');
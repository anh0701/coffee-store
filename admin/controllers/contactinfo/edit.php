<?php
//load model
require_once('admin/models/contactinfo.php');
if (!empty($_POST)) {
    $info = array(
        'Id' => intval($_POST['id']),
        'Address' => escape($_POST['address']),
        'Country' => escape($_POST['country']),
        'Mobile' => escape($_POST['mobile']),
        'Phone' => escape($_POST['phone']),
        'Email' => escape($_POST['email']),
        'Facebook' => escape($_POST['facebook']),
        'Zalo' => escape($_POST['zalo']),
        'Skype' => escape($_POST['skype'])
    );
    save('contactinfo', $info);
    header('location:admin.php?controller=contactinfo');
} else {
}
if (isset($_GET['iid'])) $iid = intval($_GET['iid']); else $iid=0;
$title = ($iid==0) ? 'Thêm phần thông tin liên hệ' : 'Sửa phần thông tin liên hệ';
$user = $_SESSION['user'];
$info = get_a_record('contactinfo', $iid);
//load view
require('admin/views/contactinfo/edit.php');
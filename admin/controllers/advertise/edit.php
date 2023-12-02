<?php
//load model
require_once('admin/models/advertise.php');
if (!empty($_POST)) {
    $name = escape($_POST['name']);
    $advertise = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'Visible' => intval($_POST['visible']),
        'IsActive' => intval($_POST['status']),
        'Description' => escape($_POST['description'])
    );
    $aid = save('advertise', $advertise);
    $image_name = 'advertise' . '-' . $aid . '-' . alias($name);
    $config = array(
        'name' => $image_name,
        'upload_path' => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image = upload('image', $config);
    if ($image) {
        $advertise = array(
            'Id' => $aid,
            'Image' => $image
        );
        save('advertise', $advertise);
    }
    header('location:admin.php?controller=advertise');
} else {
}
if (isset($_GET['aid'])) $aid = intval($_GET['aid']); else $aid = 0;
$title = ($aid == 0) ? 'Thêm Banner quảng cáo' : 'Sửa Banner quảng cáo';
$user = $_SESSION['user'];
$advertise = get_a_record('advertise', $aid);
//load view
require('admin/views/advertise/edit.php');

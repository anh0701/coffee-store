<?php
//load model
require_once('admin/models/banners.php');
if (!empty($_POST)) {
    $name = escape($_POST['name']);
    $banner = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'Visible' => intval($_POST['visible']),
        'IsActive' => intval($_POST['status']),
        'Description' => escape($_POST['description'])
    );
    $bid = save('banner', $banner);
    $image_name = 'banner' . '-' . $bid . '-' . alias($name);
    $config = array(
        'name' => $image_name,
        'upload_path' => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image = upload('image', $config);
    if ($image) {
        $banner= array(
            'Id' => $bid,
            'Image' => $image
        );
        save('banner', $banner);
    }
    header('location:admin.php?controller=banner');
} else {
}

if (isset($_GET['bid'])) $bid = intval($_GET['bid']); else $bid = 0;
$title = ($bid == 0) ? 'Thêm Banner' : 'Sửa Banner';
$user = $_SESSION['user'];
$banner = get_a_record('banner', $bid);

//load view
require('admin/views/banner/edit.php');

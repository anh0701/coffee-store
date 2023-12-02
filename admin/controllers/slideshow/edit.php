<?php
//load model
require_once('admin/models/slideshow.php');
if (!empty($_POST)) {
    $name = escape($_POST['name']);
    $slideshow = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'text1' => escape($_POST['text1']),
        'text2' => escape($_POST['text2']),
        'text3' => escape($_POST['text3']),
        'text4' => escape($_POST['text4']),
        'text5' => escape($_POST['text5']),
        'status' => intval($_POST['status'])
    );
    $sid = save('slideshow', $slideshow);
    $image_name1 = 'image1' . '-' . $sid . '-' . alias($name);
    $config = array(
        'name' => $image_name1,
        'upload_path' => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image1 = upload('image1', $config);
    if ($image1) {
        $slideshow = array(
            'Id' => $sid,
            'img1' => $image1
        );
        save('slideshow', $slideshow);
    }
    $image_name2 = 'image2' . '-' . $sid . '-' . alias($name);
    $config = array(
        'name' => $image_name2,
        'upload_path' => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image2 = upload('image2', $config);
    if ($image2) {
        $slideshow = array(
            'Id' => $sid,
            'img2' => $image2
        );
        save('slideshow', $slideshow);
    }
    $image_name3 = 'image3' . '-' . $sid . '-' . alias($name);
    $config = array(
        'name' => $image_name3,
        'upload_path' => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image3 = upload('image3', $config);
    if ($image3) {
        $slideshow = array(
            'Id' => $sid,
            'img3' => $image3
        );
        save('slideshow', $slideshow);
    }
    $image_name4 = 'image4' . '-' . $sid . '-' . alias($name);
    $config = array(
        'name' => $image_name4,
        'upload_path' => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image4 = upload('image4', $config);
    if ($image4) {
        $slideshow = array(
            'Id' => $sid,
            'img4' => $image4
        );
        save('slideshow', $slideshow);
    }
    $image_name5 = 'image5' . '-' . $sid . '-' . alias($name);
    $config = array(
        'name' => $image_name5,
        'upload_path' => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image5 = upload('image5', $config);
    if ($image5) {
        $slideshow = array(
            'Id' => $sid,
            'img5' => $image5
        );
        save('slideshow', $slideshow);
    }
    header('location:admin.php?controller=slideshow');
} else {
}
if (isset($_GET['sid'])) $sid = intval($_GET['sid']); else $sid = 0;
$title = ($sid == 0) ? 'Thêm SlideShow' : 'Sửa SlideShow';
$user = $_SESSION['user'];
$slideshow = get_a_record('slideshow', $sid);
//load view
require('admin/views/slideshow/edit.php');

<?php
//load model
require_once('admin/models/users.php');
//if form submit
if (!empty($_POST)) {
    $user_edit = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'Address' => escape($_POST['address']),
        'Phone' => escape($_POST['phone'])
    );
    $uid =  save('user', $user_edit);
    $avatar_name = 'avatar_name'.$uid.'-'.alias($_POST['username']);
    $config = array(
        'name' => $avatar_name,
        'upload_path'  => 'public/upload/images/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $avatar = upload('Image1', $config);
    //cập nhật ảnh mới
    if($avatar){
        $user_edit = array(
            'Id' => $uid,
            'Avatar' => $avatar
        );
        save('user', $user_edit);
    }
        $_SESSION['user'] = get_a_record('user', $uid);
    header('location:admin.php?controller=user&action=info&uid='.intval($_POST['id']));
} else {
}
if (isset($_GET['uid'])) $uid = intval($_GET['uid']); else $uid=0;
$title = ($uid==0) ? 'Thêm thông tin' : 'Cập nhật thông tin tài khoản';
$user = $_SESSION['user'];
$user_info = get_a_record('user', $uid);
//load view
require('admin/views/user/edit.php');
<?php
//load model
require_once('admin/models/feedbacks.php');
if (!empty($_POST)) {
    $feedback = array(
        'Id' => intval($_POST['id']),
        'Name' => escape($_POST['name']),
        'Email' => escape($_POST['email']),
        'Mobile' => escape($_POST['mobile']),
        'Subject' => escape($_POST['subject'])
    );
    save('feedback', $feedback);
    header('location:admin.php?controller=feedback');
} else {
}
if (isset($_GET['fid'])) $fid = intval($_GET['fid']); else $fid=0;
$title = ($fid==0) ? 'Thêm phần phản hồi của khách hàng' : 'Sửa phần phản hồi của khách hàng';
$user = $_SESSION['user'];
$feedback = get_a_record('feedback', $fid);
//load view
require('admin/views/feedback/edit.php');
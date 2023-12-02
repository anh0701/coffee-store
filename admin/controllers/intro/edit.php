<?php
//load model
require_once('admin/models/intro.php');
if (!empty($_POST)) {
    $intro = array(
        'Id' => intval($_POST['id']),
        'Title' => escape($_POST['title']),
        'Content' => ($_POST['content']),
        'IsActive' => intval($_POST['status'])
    );
    save('intro', $intro);
    header('location:admin.php?controller=intro');
} else {
}
if (isset($_GET['iid'])) $iid = intval($_GET['iid']); else $iid=0;
$title = ($iid==0) ? 'Thêm phần giới thiệu' : 'Sửa phần giới thiệu';
$user = $_SESSION['user'];
$intro = get_a_record('intro', $iid);
//load view
require('admin/views/intro/edit.php');
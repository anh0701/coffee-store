<?php
//load model
require_once('admin/models/comments.php');
if (!empty($_POST)) {
    $comment = array(
        'Id' => intval($_POST['id']),
        'Content' => escape($_POST['content']),
        'CreateDate' => escape($_POST['createDate']),
        'Author' => escape($_POST['author']),
        'ParentId' => intval($_POST['parentId']),
        'Email' => escape($_POST['email']),
        'Phone' => escape($_POST['phone'])
    );
    save('comment', $comment);
    header('location:admin.php?controller=comment');
} else {
}

if (isset($_GET['comid'])) $comid  = intval($_GET['comid']); else $comid=0;
$title = ($comid==0) ? 'Thêm bình luận' : 'Sửa bình luận';
$user = $_SESSION['user'];
$comment = get_a_record('comment', $comid);

$products = get_all('product', array(
    'select'=>'Id,Name',
    'order_by' => 'Id'
));
$replyfor = get_all('comment', array(
    'select'=>'Id,Content',
    'order_by' => 'Id'
));
//load view
require('admin/views/comment/edit.php');
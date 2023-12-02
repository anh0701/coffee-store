<?php
//load model
require_once('admin/models/comments.php');
if (isset($_POST['comid'])) {
    foreach ($_POST['comid'] as $comid) {
        $comid = intval($comid);
        comment_delete($comid);
    }
}
$url = 'admin.php?controller=comment';
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'Comment';
$user = $_SESSION['user'];
$comments = get_all('comment', $options);
//load view
require('admin/views/comment/index.php');
<?php
//load model
require_once('admin/models/comment.php');
$comid = intval($_GET['comid']);
comment_delete($comid);
header('location:admin.php?controller=comment');
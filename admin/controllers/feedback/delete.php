<?php
//load model
require_once('admin/models/feedbacks.php');
$fid = intval($_GET['fid']);
feedback_delete($fid);
header('location:admin.php?controller=feedback');
<?php
//load model
require_once('admin/models/banners.php');
$bid = intval($_GET['bid']);
banner_delete($bid);
header('location:admin.php?controller=banner');
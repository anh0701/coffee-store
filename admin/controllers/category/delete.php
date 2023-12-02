<?php
//load model
require_once('admin/models/categories.php');
$cid = intval($_GET['cid']);
categories_delete($cid);
header('location:admin.php?controller=category');
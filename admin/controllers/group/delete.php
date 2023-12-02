<?php
//load model
require_once('admin/models/groups.php');
$gid = intval($_GET['gid']);
subcategories_delete($gid);
header('location:admin.php?controller=group');
<?php
//load model
require_once('admin/models/roles.php');
$rid = intval($_GET['rid']);
role_delete($rid);
header('location:admin.php?controller=role');
<?php
require_once('admin/models/advertise.php');
$aid = intval($_GET['aid']);
advertise_delete($aid);
header('location:admin.php?controller=advertise');
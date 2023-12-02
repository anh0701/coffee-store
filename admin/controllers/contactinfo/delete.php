<?php
//load model
require_once('admin/models/contactinfo.php');
$iid = intval($_GET['iid']);
contactinfo_delete($iid);
header('location:admin.php?controller=contactinfo');
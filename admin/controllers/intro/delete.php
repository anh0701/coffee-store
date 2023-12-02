<?php
//load model
require_once('admin/models/intro.php');
$iid = intval($_GET['iid']);
introduction_delete($iid);
header('location:admin.php?controller=intro');
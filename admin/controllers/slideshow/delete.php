<?php
//load model
require_once('admin/models/slideshow.php');
$sid = intval($_GET['sid']);
slideshow_delete($sid);
header('location:admin.php?controller=slideshow');
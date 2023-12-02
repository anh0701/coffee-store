<?php
//load model
require_once('admin/models/slideshow.php');
if (isset($_POST['sid'])) {
    foreach ($_POST['sid'] as $sid) {
        $sid = intval($sid);
        slideshow_delete($sid);
    }
}
$url = 'admin.php?controller=slideshow';
//data
$options = array(
    'order_by' => 'Id ASC'
);
$title = 'SlideShow';
$user = $_SESSION['user'];
$slideshow = get_all('slideshow', $options);
//load view
require('admin/views/slideshow/index.php');
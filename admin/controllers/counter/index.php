<?php
//load model
require_once('admin/models/counters.php');
$options_online = array(
    'order_by' => 'session ASC'
);
$user_onlines = get_all('user_online', $options_online);
$options_visiter = array(
    'order_by' => 'Id ASC'
);
$user_visiter = get_all('visiter', $options_visiter);
$title = 'Số lượng truy cập và đang online';
$user = $_SESSION['user'];
//load view
require('admin/views/counter/index.php');
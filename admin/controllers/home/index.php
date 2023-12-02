<?php
//data
$title = 'Quản trị hệ thống';
$user = $_SESSION['user'];

$optionsCom = array(
    'order_by' => 'id DESC'
);
$total_rows_comment = get_total('comment', $optionsCom);

$options_user_online = array(
    'order_by' => 'session'
);
$total_rows_online = get_total('user_online', $options_user_online);


$options_total_access = array(
    'order_by' => 'id'
);
$total_rows_access = get_total('visiter', $options_total_access);

$options_feedback = array(
    'order_by' => 'Createtime DESC'
);
$total_feedback = get_total('feedback', $options_feedback);

$options_getfeedback = array(
    'order_by' => 'Id DESC'
);
$feedbacks = get_all('feedback', $options_getfeedback);



$options_order_complete = array(
    'where' => 'Status = 1',
    'order_by' => 'Createtime DESC'
);
$order_completes = get_all('orders', $options_order_complete);


$options_order = array(
    'order_by' => 'Id DESC'
);
$total_order = get_total('orders', $options_order);

$options_inprocess = array(
    'where' => 'Status = 0',
    'order_by' => 'Id DESC'
);
$total_order_inprosess = get_total('orders', $options_inprocess);

$options_process = array(
    'where' => 'Status = 1',
    'order_by' => 'Id DESC'
);
$total_order_prosess = get_total('orders', $options_process);


$options_comment_new = array(
    'limit' => 1,
    'offset' => 0,
    'order_by' => 'Id DESC'
);
$comment_new = Selecct_a_record('comment', $options_comment_new);

$options_feedback_new = array(
    'limit' => 1,
    'offset' => 0,
    'order_by' => 'Id DESC'
);
$feedback_new = Selecct_a_record('feedback', $options_feedback_new);

$options_order_new = array(
    'limit' => 1,
    'offset' => 0,
    'order_by' => 'Id DESC'
);
$order_new = Selecct_a_record('orders', $options_order_new);
//load view
require('admin/views/home/index.php');
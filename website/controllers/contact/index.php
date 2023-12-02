<?php
if (!empty($_POST)) {
    $feedback = array(
        'Id' => 0,
        'Name' => escape($_POST['userName']),
        'Email' => escape($_POST['userEmail']),
        'Mobile' => escape($_POST['userPhone']),
        'Subject' => escape($_POST['userMsg']),
        'Createtime' => date('Y-m-d H:i:s')
    );
    save('feedback', $feedback);
}

$contactinfo = get_a_record('contactinfo',1);
$title = 'Liên hệ';
require('website/views/contact/index.php');
<?php
$myemail = 'youremail@host.com';
if (isset($_POST['password'])) {
    $password = strip_tags($_POST['password']);
    echo "<span class=\"alert alert-success\" >Your message has been received. Thanks! Here is what you submitted:</span><br><br>";
    echo "<stong>password:</strong> ".$password."<br>";
}?>
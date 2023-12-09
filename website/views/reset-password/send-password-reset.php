<?php
    require ($_SERVER['DOCUMENT_ROOT'] .'/coffee-store/connect.php');

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = md5($token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);


$sql = "UPDATE user
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

$stmt = $conn -> prepare($sql);

$stmt -> bind_param("sss", $token_hash, $expiry, $email);

$stmt -> execute();

$res = "";

if ($conn->affected_rows) {

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("qanh.mailer@gmail.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    Click <a href="http://localhost/coffee-store/website/views/reset-password/reset-password.php?token=$token">here</a> 
    to reset your password.

    END;

    try {

        $mail->send();

    } catch (Exception $e) {

        $res = "Message could not be sent. Mailer error: {$mail->ErrorInfo}";

    }

}

$res = "Message sent, please check your inbox.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Quán cà phê">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Quán cà phê"/>
    <title><?php echo isset($title) ? $title : 'Smart Shop'; ?></title>

        <!-- FAVICON -->
    <link href="../../../public/asset/images/favicon.png?v=2" rel="icon" type="image/x-icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../../public/asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/asset/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="../../../public/asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="../../../public/asset/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="../../../public/asset/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="../../../public/asset/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="../../../public/asset/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="../../../public/asset/css/style.css" rel="stylesheet">
</head>
<body>
    <p><?php echo $res;?></p>
</body>
</html>
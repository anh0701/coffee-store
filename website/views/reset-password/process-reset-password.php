<?php
    require ($_SERVER['DOCUMENT_ROOT'] .'/coffee-store/connect.php');

$token = $_POST["token"];

$token_hash = md5($token);

$sql = "SELECT * FROM user
        WHERE reset_token_hash = ?";

$stmt = $conn -> prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = md5($_POST["password"]);

$sql = "UPDATE user
        SET Password = ?,
            reset_token_hash = NULL,
            reset_token_expires_at = NULL
        WHERE id = ?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $password_hash, $user["Id"]);

$stmt->execute();

$res = "Password updated. You can now login.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0;URL=http://localhost/coffee-store/login/" />
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
    
<section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border">
                        <h3 class="bg-gray p-4 text-center"><?php echo $res;?></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<?php
    require ($_SERVER['DOCUMENT_ROOT'] .'/coffee-store/connect.php');

$token = $_GET["token"];

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

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Reset Password</title>
    <!-- <base href="http://localhost/coffee-store/"/> -->
    <meta charset="UTF-8">

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

    <!-- <h1>Reset Password</h1>

    <form method="post" action="process-reset-password.php">

        <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">

        <label for="password">New password</label>
        <input type="password" id="password" name="password">

        <label for="password_confirmation">Repeat password</label>
        <input type="password" id="password_confirmation"
               name="password_confirmation">

        <button>Send</button>
    </form> -->

    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border">
                        <h3 class="bg-gray p-4">Đặt lại mật khẩu</h3>
                        <form  method="post" action="process-reset-password.php">
                            <fieldset class="p-4">
                                <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                                <input type="password" placeholder="Nhập mật khẩu" name="password" id="password" type="password" class="border p-3 w-100 my-2">
                                <input type="password" placeholder="Nhập lại mật khẩu" id="password_confirmation" name="password_confirmation" type="password" class="border p-3 w-100 my-2">
                                <button type="submit" class="d-block py-3 px-5 bg-warning text-white border-0 rounded font-weight-bold mt-3">Gửi</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
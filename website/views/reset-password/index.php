<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Forgot Password</title>
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

    <!-- <h1>Forgot Password</h1> -->

    <!-- <form method="post" action="send-password-reset.php">

        <label for="email">email</label>
        <input type="email" name="email" id="email">

        <button>Send</button>

    </form> -->

    <section class="login py-5 border-top-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 align-item-center">
                    <div class="border">
                        <h3 class="bg-gray p-4">Quên mật khẩu</h3>
                        <form  method="post" action="send-password-reset.php">
                            <fieldset class="p-4">
                                <!-- <label for="email">email</label>
                                <input type="email" name="email" id="email"> -->
                                <input type="text" placeholder="Nhập E-mail" id="email" name="email" type="email" autofocus class="border p-3 w-100 my-2">

                                <button type="submit" class="d-block  py-3 px-5 bg-warning text-white border-0 rounded font-weight-bold mt-3">Gửi</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<?php
$options_parent_menu = array(
    'order_by' => 'Id'
);
$parent_menus = get_all('categories',$options_parent_menu);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <base href="http://localhost/coffee-store/"/>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shop thời trang nam">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Shop thời trang nam"/>
    <title><?php echo isset($title) ? $title : 'Smart Shop'; ?></title>

        <!-- FAVICON -->
    <link href="public/asset/images/favicon.png" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/asset/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/asset/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="public/asset/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="public/asset/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="public/asset/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="public/asset/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="public/asset/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="public/asset/css/style.css" rel="stylesheet">
</head>
<body>
    

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand" href="home">
						<img height="45" width="auto" src="public/asset/images/logo3.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item active">
								<a class="nav-link" href="home">Trang chủ</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Danh mục sản phẩm<span><i class="fa fa-angle-down"></i></span></a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
                                    <?php foreach ($parent_menus as $parent_menu): $parentId = $parent_menu['Id']; ?>
                                    <a  class="dropdown-item" href="group/<?php echo $parent_menu['Id'] ?>-<?php echo $parent_menu['alias'] ?>.html"><?php echo $parent_menu['Name'] ?></a>
                                    <?php endforeach; ?>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Cửa hàng <span><i class="fa fa-angle-down"></i></span>
								</a>
								<!-- Dropdown list -->
								<div class="dropdown-menu">
									<a class="dropdown-item" href="intro">Về chúng tôi</a>
									<a class="dropdown-item" href="contact">Liên hệ</a>
								</div>
							</li>
							<li class="nav-item">
                                <a class="nav-link" href="about">Thành viên</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">Liên hệ</span></a>
                            </li>
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
								<?php if (isset($_SESSION['user'])) : ?>
									<li class="nav-item">
										<a class="nav-link"><?php echo $_SESSION['user']['Name'] ?></a>
									</li>
									<li class="nav-item">
										<a class="nav-link border mr-2" href="index.php?controller=login&action=logout">Đăng xuất</a>
									</li>
								<?php else : ?>
									<li class="nav-item">
										<a class="nav-link login-button" href="login">Đăng nhập</a>
									</li>
									<!-- <li class="nav-item">
										<a class="nav-link login-button" href="signup">Đăng ký</a>
									</li> -->
								<?php endif ?>
							<li class="nav-item">
								<a class="nav-link text-white  btn-warning" href="cart"> Giỏ hàng: <?php echo cart_number(); ?> <i class="fa fa-shopping-cart"></i></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>
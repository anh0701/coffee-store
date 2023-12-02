<?php require('website/views/shared/header.php'); ?>

<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Tham gia với chúng tôi</h3>
                    <form method="post" action="index.php?controller=login&action=index">
                        <fieldset class="p-4">
                            <input type="text" placeholder="Nhập E-mail" name="email" type="email" autofocus class="border p-3 w-100 my-2">
                            <input type="password" placeholder="Nhập mật khẩu" name="password" type="password" class="border p-3 w-100 my-2">
                            <div class="loggedin-forgot">
                                    <input type="checkbox" id="keep-me-logged-in">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Giữ đăng nhập</label>
                            </div>
                            <button type="submit" class="d-block py-3 px-5 bg-warning text-white border-0 rounded font-weight-bold mt-3">Đăng nhập</button>
                            <a class="mt-3 d-block  text-warning" href="#">Quên mật khẩu</a>
                            <a class="mt-3 d-inline-block text-warning" href="signup">Đăng kí</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('website/views/shared/footer.php'); ?>
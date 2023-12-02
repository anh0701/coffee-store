<?php require('website/views/shared/header.php'); ?>

<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Đăng kí ngay nào</h3>
                    <form method="post" action="index.php?controller=signup&action=index">
                        <fieldset class="p-4">
                            <input type="text" placeholder="Nhập E-mail" name="email" type="email" autofocus class="border p-3 w-100 my-2">
                            <input type="password" placeholder="Nhập mật khẩu" name="password1" type="password" class="border p-3 w-100 my-2">
                            <input type="password" placeholder="Nhập lại mật khẩu" name="password2" type="password" class="border p-3 w-100 my-2">
                            <button type="submit" class="d-block py-3 px-5 bg-warning text-white border-0 rounded font-weight-bold mt-3">Đăng ký</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('website/views/shared/footer.php'); ?>
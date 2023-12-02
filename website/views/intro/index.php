<?php require('website/views/shared/header.php'); ?>

    <div class="product-model">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="home"><b>TRANG CHỦ</b></a></li>
            <li class="active ml-2">Giới thiệu và hướng dẫn mua hàng shop</li>
        </ol>
        <div class="row">
            <?php require('website/views/shared/navbar.php'); ?>
            <div class="col-md-9 product-model-sec">
                <div class="feature-grids" style="background-color:#ffffff">
                    <div class="section" id="intro">
                        <?php echo $introduction['Content'];?>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
</div>
</div>
<?php require('website/views/shared/footer.php'); ?>
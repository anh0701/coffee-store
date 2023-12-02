<?php require('website/views/shared/header.php'); ?>

    <div class="product-model">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="home"><b>TRANG CHỦ</b></a></li>
                <li class="active"><?php echo $breadCrumb ?></li>
            </ol>

            <div class="col-md-9 product-model-sec">
                <div class="feature-grids" style="background-color:#ffffff">

                    <?php if (empty($products)) : ?>
                        <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
                    <?php endif; ?>
                    <?php foreach ($products as $product): ?>
                        <div class="col-md-4 feature-grid jewel">
                            <a href="product/<?php echo $product['Id']; ?>-<?php echo $product['alias']; ?>.html"
                               class="screenshot"
                               rel="<?php echo 'public/upload/product/' . $product['Image1'] ?>"><?php echo '<image src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '"alt="' . $product['Image1'] . '" />'; ?>
                            </a>

                            <div class="arrival-info">
                                <h4><?php echo $product['Name'] ?></h4>
                                <?php if ($product["TypeId"] == 3): ?>
                                    <span class="pric1"><del>Giá bán
                                            : <?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>
                                            VNĐ
                                        </del></span>
                                    <p>Giá khuyến mại
                                        : <?php echo $product ? number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php else: ?>
                                    <br>
                                    <p>Giá bán
                                        : <?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>
                                        VNĐ</p>
                                <?php endif ?>
                            </div>
                            <div class="viw">
                                <a href="product/<?php echo $product['Id']; ?>-<?php echo $product['alias']; ?>.html"><span
                                        class="glyphicon glyphicon-eye-open"
                                        aria-hidden="true"></span>Quick
                                    View</a>
                            </div>
                            <?php if ($product["TypeId"] == 3): ?>
                                <div class="shrt">
                                    <a href="product/<?php echo $product['Id']; ?>-<?php echo $product['alias']; ?>.html"><span
                                            class="glyphicon glyphicon-star" aria-hidden="true"></span><b>Sale
                                            <?php echo $product['Percent_off']; ?>%</b></a>
                                </div>
                            <?php elseif ($product["TypeId"] == 2): ?>
                                <div class="shrt">
                                    <a style="color: #315B5E"
                                       href="product/<?php echo $product['Id']; ?>-<?php echo $product['alias']; ?>.html"><span
                                            class="glyphicon glyphicon-new-window" aria-hidden="true"></span><b>sản phẩm
                                            mới</b></a>
                                </div>
                            <?php elseif ($product["TypeId"] == 1): ?>
                                <div class="shrt">
                                    <a style="color: #0026ff"
                                       href="product/<?php echo $product['Id']; ?>-<?php echo $product['alias']; ?>.html"><span
                                            class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span><b>order</b></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                    <div class="clearfix"></div>
                </div>
                <?php if ($total_rows > $limit) {
                    ?>
                    <div class="text-right">
                        <?php echo $pagination; ?>
                    </div>
                    <?php
                } ?>
            </div>
            <?php require('website/views/shared/navbar.php'); ?>
        </div>
    </div>
<?php require('website/views/shared/footer.php'); ?>
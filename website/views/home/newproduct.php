<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Sản phẩm mới</h2>
					<p>Đây là những sản phẩm mới của tuần</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
                
          
                
				<div class="trending-ads-slide">
                    <?php if (empty($new_products)) : ?>
                        <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
                    <?php endif; ?>
                    <?php foreach ($new_products as $new_product): ?>
                        <div class="col-sm-12 col-lg-4">
						<!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <div class="price"><?php echo $new_product ? number_format($new_product['Price'], 0, ',', '.') : 0; ?> vnđ</div>
                                        <a href="product/<?php echo $new_product['Id']; ?>-<?php echo $new_product['alias']; ?>.html">
                                        <?php echo '<image class="card-img-top img-fluid" src="public/upload/product/' . $new_product['Image1'] . '?time=' . time() . '"alt="' . $new_product['Image1'] . '" />'; ?>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="product/<?php echo $new_product['Id']; ?>-<?php echo $new_product['alias']; ?>.html"><?php echo $new_product['Name']?></a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="type/2-san-pham-moi.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"><i class="fa fa-calendar"></i>26th December</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Đây là những sản phẩm hot trong tuần</p>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>

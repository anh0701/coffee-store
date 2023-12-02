<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>SẢN PHẨM NỔI BẬT</h2>
					<p>Mua thôi băn khoăn hết hàng!!</p>
				</div>
				<div class="row">
                    <?php if (empty($order_products)) : ?>
                        <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
                    <?php endif; ?>
                    <?php foreach ($order_products as $order_product): ?>
                        <div class="col-sm-12 col-lg-4">
						<!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <div class="price"><?php echo $order_product ? number_format($order_product['Price'], 0, ',', '.') : 0; ?> vnđ</div>
                                        <a href="product/<?php echo $order_product['Id']; ?>-<?php echo $order_product['alias']; ?>.html">
                                        <?php echo '<image class="card-img-top img-fluid" src="public/upload/product/' . $order_product['Image1'] . '?time=' . time() . '"alt="' . $order_product['Image1'] . '" />'; ?>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="product/<?php echo $order_product['Id']; ?>-<?php echo $order_product['alias']; ?>.html"><?php echo $order_product['Name']?></a></h4>
                                        <ul class="list-inline product-meta">
                                            <li class="list-inline-item">
                                                <a href="type/2-san-pham-moi.html"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#"><i class="fa fa-calendar"></i>26th December</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Hãy mua sản phẩm từ chúng tôi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

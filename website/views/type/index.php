<?php require('website/views/shared/header.php'); ?>
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
                    <form  action="http://localhost/coffee-store/search/" method="get" onsubmit="return false;">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control my-2 my-lg-1 bg-transparent" name='q' id='q' placeholder="Nhập từ khoá">
                            </div>
                            <div class="form-group col-md-3">
                                <select class="w-100 form-control mt-lg-1 mt-md-2  bg-transparent">
                                    <option>Danh mục</option>
                                    <?php foreach ($parent_menus as $parent_menu): $parentId = $parent_menu['Id']; ?>
                                        <option value="<?php echo $parent_menu['Id'] ?>"><?php echo $parent_menu['Name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-2 align-self-center">
                                <button type="submit" class="btn btn-primary" onclick="window.location.href = this.form.action + this.form.q.value.replace(/ /g, '+');" >Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-sm">
    <div class="container">
        <div class="row">
            <?php require('website/views/shared/navbar.php'); ?>
            <div class="col-md-9">
                <div class="product-grid-list">
                    <div class="row mt-30">
                        <?php if (empty($products)) : ?>
                            <h3 class="col-sm-12">Không có sản phẩm nào trong danh mục này.</h3>
                        <?php endif; ?>
                        <?php foreach ($products as $product): ?>
                            <div class="col-sm-12 col-lg-4 col-md-6">
                                <!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <?php if ($product["TypeId"] == 3): ?>
                                                <div class="price">Sale: <?php echo $product ? number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.') : 0; ?>đ</div>
                                            <?php else: ?>
                                                <div class="price">Giá: <?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>đ</div>
                                            <?php endif ?>
                                            <a href="product/<?php echo $product['Id']; ?>-<?php echo $product['alias']; ?>.html">
                                            <?php echo '<image class="card-img-top img-fluid" src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '"alt="' . $product['Image1'] . '" />'; ?>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="product/<?php echo $product['Id']; ?>-<?php echo $product['alias']; ?>.html">
                                                <?php echo $product['Name'] ?>
                                            </a>
                                            </h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="home"><i class="fa fa-folder-open-o"></i>Electronics</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="home"><i class="fa fa-calendar"></i>12/11</a>
                                                </li>
                                            </ul>
                                            <p class="card-text">Sản phẩm chất lượng</p>
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
                <div class="pagination justify-content-center">
                    <nav aria-label="Page navigation example">  
                        <?php if ($total_rows > $limit) 
                            {?>
                            <div class="text-right">
                                <?php echo $pagination; ?>
                            </div>
                            <?php
                        } ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('website/views/shared/footer.php'); ?>
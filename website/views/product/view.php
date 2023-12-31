<?php require('website/views/shared/header.php'); ?>

<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
                    <form  action="http://localhost/coffee-store/search/" method="get">
                        <div class="form-row">
                            <div class="form-group col-md-7">
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
                            <!-- <div class="form-group col-md-3">
                                <input type="text" class="form-control my-2 my-lg-1  bg-transparent" id="inputLocation4" placeholder="Vị trí - Hải Phòng" disabled>
                            </div> -->
                            <div class="form-group col-md-2 align-self-center">
                                <button type="submit" class="btn btn-info" onclick="window.location.href = this.form.action + this.form.q.value.replace(/ /g, '+');" >Tìm kiếm</button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<h1 class="product-title"><?php echo $product['Name'] ?></h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href="home">Admin</a></li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href="">Electronics</a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href="home">Hải Phòng</a></li>
						</ul>
					</div>

					<!-- product slider -->
					<div class="product-slider">
                        <?php for ($i = 1; $i < 5; $i++): ?>
                            <?php if (!empty($product['Image' . $i])) { ?>
                                <div class="product-slider-item my-4" data-image="<?php echo 'public/upload/product/' . $product['Image' . $i] ?>">
                                    <img class="img-fluid w-100" src="<?php echo 'public/upload/product/' . $product['Image' . $i] ?>" alt="product-img">
                                </div>
                            <?php } else { ?>
                                <div class="product-slider-item my-4" data-image="<?php echo 'public/upload/product/' . $product['Image' . $i] ?>">
                                    <img class="img-fluid w-100" src="<?php echo 'public/upload/product/' . $product['Image' . $i] ?>" alt="product-img">
                                </div>
                            <?php } ?>
                        <?php endfor; ?>
					</div>
					<!-- product slider -->

					<div class="content mt-5 pt-5">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
								 aria-selected="true">Mô tả sản phẩm</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
								 aria-selected="false">Đánh giá</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">Mô tả sản phẩm</h3>
								<table class="table table-bordered product-table">
									<tbody>
										<tr>
                                            <?php if ($product["TypeId"] == 3): ?>
                                                <td>Giá khuyến mãi</td>
                                                <td>
                                                    <?php echo $product ? number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.') : 0; ?>VNĐ
                                                </td>
                                            <?php else: ?>
                                                <td>Giá bán</td>
                                                <td>Giá bán : <?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>
                                                    VNĐ</td>
                                                <br>
                                            <?php endif ?>
										</tr>
										<tr>
											<td>Màu sắc</td>
											<td><?php echo $product['Color'] ?></td>
										</tr>
										<tr>
											<td>Kích thước</td>
											<td><?php echo $product['Size'] ?></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">Đánh giá sản phẩm</h3>
								<div class="product-review">
									<div class="media">
										<!-- Avater -->
										<img src="public/asset/images/user/user-thumb.jpg" alt="avater">
										<div class="media-body">
											<!-- Ratings -->
											<div class="ratings">
												<ul class="list-inline">
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
												</ul>
											</div>
											<div class="name">
												<h5>ABC</h5>
											</div>
											<div class="date">
												<p>Nov 20, 2021</p>
											</div>
											<div class="review-comment">
												<p>
													Một sản phẩm hoàn thiện đem lại trải nghiệm rất tuyệt vời
												
												</p>
											</div>
										</div>
									</div>
									<div class="review-submission">
										<h3 class="tab-title">Submit your review</h3>
										<!-- Rate -->
										<div class="rate">
											<div class="starrr"></div>
										</div>
										<div class="review-submit">
											<form action="index.php?controller=product&amp;action=view" method="post"  class="row">
												<div class="col-lg-6">
													<input type="text" name="name" id="name" class="form-control" placeholder="Tên của bạn">
												</div>
												<div class="col-lg-6">
													<input type="text" name="phone" id="phone" class="form-control" placeholder="Số điện thoại">
												</div>
												<div class="col-lg-6">
													<input type="email" name="email" id="email" class="form-control" placeholder="Email">
												</div>
												<div class="col-12">
													<textarea name="review" id="review" rows="10" class="form-control" placeholder="Nội dung"></textarea>
												</div>
												<div class="col-12">
													<button type="submit" name="submit" value="submit" class="btn btn-main">Đánh giá</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<?php if ($product["TypeId"] == 3): ?>
                            <h4>Giá khuyễn mãi</h4>
                            <p><?php echo $product ? number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.') : 0; ?> VNĐ</p>
                        <?php else: ?>
                            <h4>Giá bán</h4>
                            <p><?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?> VNĐ</p>
                        <?php endif ?>
					</div>
					<!-- User Profile widget -->
					<div class="widget text-center">
						<!-- <h4><a href="">Jonathon Andrew</a></h4> -->
						<p class="member-time">21 - 11 - 2021</p>
						<a href="type/1-san-pham-order.html">Mua thêm</a>
						<ul class="list-inline mt-20">
							<li class="list-inline-item">
                                <a href="cart/add/<?php echo $product['Id']; ?>" class="btn btn-contact d-inline-block  btn-warning px-lg-5 my-1 px-md-3">Thêm vào giỏ hàng</a>
                            </li>
							<li class="list-inline-item">
                                <a href="" class="btn btn-offer d-inline-block btn-warning ml-n1 my-1 px-lg-4 px-md-3">Make an offer</a>
                            </li>
						</ul>
					</div>
					<!-- Rate Widget -->
					<div class="widget rate">
						<!-- Heading -->
						<h5 class="widget-header text-center">Đánh giá sản phẩm</h5>
						<!-- Rate -->
						<div class="starrr"></div>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>

<?php require('website/views/shared/footer.php'); ?>
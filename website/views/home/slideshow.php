<?php
$options_parent_menu = array(
    'order_by' => 'Id'
);
$parent_menus = get_all('categories',$options_parent_menu);
?>
<!-- <?php $banner_ads = get_a_record('banner',2);?> -->

<section class="hero-area bg-1 text-center overly" <?php echo ' style="background: url('.PATH_URL_IMG.$banner_ads['Image'] . '?time=' . time() . ');background-size: cover;background-repeat: no-repeat;" '; ?>>
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Cà phê ngon mỗi ngày</h1>
					<p> 
                        <br>Chúng tôi luôn dem đến trải nghiệm tuyệt vời nhất cho khách hàng.
                    </p>
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
                                    <form  action="http://localhost/coffee-store/search/" method="get" onsubmit="return false;">
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <input type="text" class="form-control my-2 my-lg-1" name='q' id='q' placeholder="Nhập từ khoá">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <select class="w-100 form-control mt-lg-1 mt-md-2">
                                                    <option>Danh mục</option>
                                                    <?php foreach ($parent_menus as $parent_menu): $parentId = $parent_menu['Id']; ?>
                                                        <option value="<?php echo $parent_menu['Id'] ?>"><?php echo $parent_menu['Name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2 align-self-center">
                                                <button type="submit" class="btn btn-warning" onclick="window.location.href = this.form.action + this.form.q.value.replace(/ /g, '+');" >Tìm kiếm</button>
                                            </div>
											<!-- <div class="form-group col-md-3">
                                                <input type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Chọn danh mục bạn muốn tìm" disabled>
                                            </div> -->
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
	<!-- Container End -->
</section>

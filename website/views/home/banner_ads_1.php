<?php
$options_parent_menu = array(
    'order_by' => 'Id'
);
$parent_menus = get_all('categories',$options_parent_menu);
?>
<section class="call-to-action overly bg-3 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					<h2>Bắt đầu khám phá quán cà phê của chúng tôi</h2>
					<ul class="list-inline mt-30">
						<li class="list-inline-item"><a class="btn btn-warning" href="group/<?php echo $parent_menu['Id'] ?>-<?php echo $parent_menu['alias'] ?>.html">Thêm vào giỏ hàng</a></li>
						<li class="list-inline-item"><a class="btn btn-secondary" href="about">Tìm hiểu thêm</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

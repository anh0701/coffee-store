<form id="cart_form" method="post" action="index.php?controller=cart&amp;action=send" role="form">
	<div class="row">
		<div class="col-md-7 col-sm-12">
		<h2>Thông tin đơn hàng</h2><br>

		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="hidden-xs">STT</th>
					<th class="hidden-xs">Ảnh</th>
					<th>Sản phẩm</th>
					<th>Giá</th>
					<th>SL</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$stt = 0;
				foreach ($cart as $pid => $product): 
					$stt++;
				?>
				<tr>
					<td class="hidden-xs"  style="width: 8%"><?php echo $stt;?></td>
					<td class="hidden-xs"  style="width: 20%">
						<?php
						$image = 'public/upload/product/'.$product['image'];
						if (is_file($image)) {
							echo '<image src="'.$image.'" style="max-width:50px; max-height:50px;" />';
						}
						?>
					</td>
					<td  style="width: 30%">
						<a href="product/<?php echo $product['id']; ?>"><?php echo $product['name'];?></a>
					</td>
					<td  style="width: 20%">
						<?php if ($product["typeid"] == 3): ?>
							<?php echo $product ? number_format(($product['price']) - ($product['price']) * ($product['percent_off']) / 100, 0, ',', '.') : 0; ?>
						<?php else: ?>
							<?php echo number_format($product['price'],0,',','.'); ?>
						<?php endif ?>
					</td>
					<td  style="width: 10%">
						<?php echo $product['number'];?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="5">Thành tiền : <?php echo number_format(cart_total(),0,',','.'); ?> VNĐ</th>
				</tr>
			</tfoot>
		</table>
	</div>

	<div class="col-md-5 col-sm-12">
		<h2>Thông tin khách hàng</h2>
		<br>
		<input name="cart_total" type="hidden" value="<?php echo cart_total() ? cart_total() : '0'; ?>"/>
		<?php if (isset($_SESSION['user'])) : ?>
			<div class="form-group">
				<lable>Mô tả</label>
				<input name="name" type="text" class="form-control" placeholder="Họ và tên" required="required" value="<?php echo $_SESSION['user']['Username'] ?>"/>
			</div>
			<div class="form-group">
				<lable>địa chỉ</label>
				<input name="address" type="text" class="form-control" placeholder="Địa chỉ" required="required" value="<?php echo $_SESSION['user']['Address'] ?>"/>
			</div>
			<div class="form-group">
				<lable>Số điện thoại</label>
				<input name="phone" type="text" class="form-control" placeholder="Số di động" required="required" pattern="[0-9]{10,11}" value="<?php echo $_SESSION['user']['Phone'] ?>"/>
			</div>
			<div class="form-group">
				<lable>Mô tả</label>
				<textarea name="mota" type="text" class="form-control" placeholder="Ghi chú"></textarea>
			</div>
		<?php else : ?>
			<div class="form-group">
				<lable>Họ tên</label>
				<input name="name" type="text" class="form-control" placeholder="Họ và tên" required="required"/>
			</div>
			<div class="form-group">
				<lable>địa chỉ</label>
				<input name="address" type="text" class="form-control" placeholder="Địa chỉ" required="required"/>
			</div>
			<div class="form-group">
				<lable>Số điện thoại</label>
				<input name="phone" type="text" class="form-control" placeholder="Số di động" required="required" pattern="[0-9]{10,11}"/>
			</div>
			<div class="form-group">
				<lable>Mô tả</label>
				<textarea name="mota" type="text" class="form-control" placeholder="Ghi chú"></textarea>
			</div>
		<?php endif ?>
		
		<br>
		<div class="form-group" style="text-align: center">
			<button type="submit" class="btn btn-primary" ><i class="glyphicon glyphicon-ok"></i> Đặt hàng</button>
		<!--<a href="cart/send/success" class="btn btn-primary"><i class="glyphicon glyphicon-list-alt"></i> Đặt hàng</a>-->
		</div>	
	</div>
	</div>
	

</form>

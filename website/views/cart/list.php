<form id="cart_form" method="post" action="index.php?controller=cart" role="form">

<div class="col-xs-12">
	<h2>Giỏ hàng</h2><br>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th class="hidden-xs">STT</th>
				<th class="hidden-xs">Ảnh</th>
				<th>Sản phẩm</th>
				<th>Giá</th>
				<th>Số lượng</th>
				<th>Tác vụ</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$stt = 0;
			foreach ($cart as $pid => $product): 
				$stt++;
			?>
			<tr>
				<td class="hidden-xs" style="width: 8%"><?php echo $stt;?></td>
				<td class="hidden-xs"  style="width: 20%">
					<?php
					$image = 'public/upload/product/'.$product['image'];
					if (is_file($image)) {
                        echo '<image src="'.$image.'" style="max-width:100px; max-height:50px;" />';
                    }
                    ?>
                </td>
				<td  style="width: 20%">
					<a href="product/<?php echo $product['id']; ?>"><?php echo $product['name'];?></a>
				</td>
				<td  style="width: 20%">
                <?php if ($product["typeid"] == 3): ?>
                    <?php echo $product ? number_format(($product['price']) - ($product['price']) * ($product['percent_off']) / 100, 0, ',', '.') : 0; ?>
                <?php else: ?>
					<?php echo number_format($product['price'],0,',','.'); ?>
                <?php endif ?>
				</td>
				<td  style="width: 20%">
					<div class="btn-group">
						<input name="number[<?php echo $product['id'];?>]" type="text" value="<?php echo $product['number'];?>" size="3" class="form-control text-center"/>
					</div>
				</td>
				<td>
					<a href="cart/delete/<?php echo $product['id']; ?>" class="text-danger">Xoá</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="6">Thành tiền : <?php echo number_format(cart_total(),0,',','.'); ?> VNĐ</th>
			</tr>
		</tfoot>
	</table>
	<br>
	<div class="form-group" >
		<!-- Single button -->
		<div class="btn-group" style="padding-right: 30%;">
			<input type="submit" class="form-control btn-warning" value="Cập nhật"/>
		</div>
		<a href="cart/order/checkout" class="btn btn-warning">Đặt hàng</a>
	</div>	
	<!-- ///////////////////////////////////// -->
	
</div>

</form>

<?php require('admin/views/shared/header.php'); ?>

<style type="text/css">
	.table th, .table td {
		text-align: center;
	}
	.table th:nth-child(3), .table td:nth-child(3)  {
		width: auto;
		text-align: left;
	}
	.table th:nth-child(4), .table td:nth-child(4),
	.table th:nth-child(5), .table td:nth-child(5)  {
	}
	.table td {
		vertical-align: middle!important;
	}
</style>
    <div id="page-wrapper">
        <div class="panel panel-default">

            <div class="col-xs-12">
                <h3>Thông tin đơn hàng</h3>

                <table id="order_detail" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="hidden-xs">STT</th>
                        <th class="hidden-xs">Ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Giá KM</th>
                        <th>SL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $stt = 0;
                    $order_total = 0;
                    foreach ($order_detail as $product):
                        $stt++;
                        if($product["TypeId"]==3){
                            $order_total += $product['Price'] - (($product['Price'])*($product['Percent_off']) / 100);
                        }else
                        $order_total += $product['Price'] * $product['Quantity'];
                        ?>
                        <tr>
                            <td class="hidden-xs"><?php echo $stt;?></td>
                            <td class="hidden-xs">
                                <?php
                                $image = 'public/upload/product/'.$product['Image1'];
                                if (is_file($image)) {
                                    echo '<image src="'.$image.'" style="max-width:50px; max-height:50px;" />';
                                }
                                ?>
                            </td>
                            <td>
                                <a href="index.php?p=detail&idProduct=<?php echo $product['Id'];?>"><?php echo $product['Name'];?></a>
                            </td>
                            <td>
                                <?php echo number_format($product['Price'],0,',','.'); ?>
                            </td>
                            <td>
                                <?php echo number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.'); ?>
                            </td>
                            <td width="5%">
                                <?php echo $product['Quantity'];?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="6">
                            <h4>Thành tiền : <?php echo number_format($order_total,0,',','.'); ?> VNĐ</h4>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <style type="text/css">
                #info td {
                    text-align: left;
                }
            </style>

            <div class="col-xs-12">
                <h3>Thông tin khách hàng</h3>

                <table id="info" class="table">
                    <tr>
                        <td>Họ và tên</td>
                        <td><?php echo $order['Customer']; ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?php echo $order['Address']; ?></td>
                    </tr>
                    <tr>
                        <td>Di động</td>
                        <td><?php echo $order['Phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Thời gian</td>
                        <td><?php echo $order['Createtime']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $order['Email']; ?></td>
                    </tr>
                </table>

                <form id="order_form" method="post" action="admin.php?controller=order&amp;action=complete" role="form">
                    <div class="form-group">
                        <input name="oid" type="hidden" value="<?php echo $order['Id']; ?>"/>
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Xử lý xong</button>
                        <a href="admin.php?controller=order" class="btn btn-warning">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
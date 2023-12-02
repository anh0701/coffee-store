<?php
$options = array(
    'where' => 'TypeId = 3',
    'order_by' => 'Id DESC'
);
$product_saleoff = get_all('product', $options);
?>
<div class="panel panel-default">
    <div class="panel-heading text-center">
        <b>Sản phẩm khuyến mại</b>
    </div>
    <div class="panel-body">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-saleoff">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Tên SP</th>
                    <th>Giá bán</th>
                    <th>Giá KM</th>
                    <th>Ngày tạo</th>
                    <th>Img</th>
                    <th>Số lượng</th>
                    <th>Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($product_saleoff as $product): ?>
                    <tr class="odd gradeX">
                        <td><h4 class="item_name"><?php echo $product['Id'] ?></h4></td>
                        <td>
                            <a href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['Id']; ?>"><?php echo $product['Name']; ?></a>
                        </td>
                        <td><?php echo $product ? number_format($product['Price'],0,',','.') : 0; ?></td>
                        <td><?php echo number_format(($product['Price']) - ($product['Price']) * ($product['Percent_off']) / 100, 0, ',', '.'); ?></td>
                        <td class="center"><?php echo $product['Createdate'] ?></td>
                        <td class="center"><?php echo '<image src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '" style="max-width:50px;" />'; ?></a></td>
                        <td class="center"><?php echo $product['TotalView'] ?></td>
                        <td>
                            <a href="admin.php?controller=product&amp;action=edit&amp;pid=<?php echo $product['Id']; ?>"
                               class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="admin.php?controller=product&amp;action=delete&amp;pid=<?php echo $product['Id']; ?>"
                               class="text-danger deleteitem"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#dataTables-saleoff').DataTable({
            responsive: true,  "order":[[0, 'desc']]
        });
    });
</script>
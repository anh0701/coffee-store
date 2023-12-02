<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <div class="panel panel-default">
    <div class="panel-heading">
        Danh sách các đơn hàng
    </div>
    <div class="panel-body">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-order">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Khách hàng</th>
                    <th>Thời gian</th>
                    <th>Trạng thái</th>
                     <th>Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($orders as $order): ?>
			<tr>
				<td><?php echo $order['Id'];?></td>
				<td><a href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['Id'];?>"><?php echo $order['Customer'];?></a></td>
				<td><?php echo $order['Createtime'];?></td>
				<td><?php echo $status[$order['Status']];?></td>
				<td>
                            <a href="admin.php?controller=order&amp;action=edit&amp;oid=<?php echo $order['Id']; ?>"
                               class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="admin.php?controller=order&amp;action=delete&amp;oid=<?php echo $order['Id']; ?>"
                               class="text-danger"><i class="glyphicon glyphicon-remove"></i></a>
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
        $('#dataTables-order').DataTable({
             responsive: true,"order":[[0, 'desc']]
        });
    });
</script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
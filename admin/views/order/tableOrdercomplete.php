<div class="panel panel-default">
    <div class="panel-heading text-center">
        <b>Danh sách các đơn hàng đã xử lý</b>
    </div>
    <div class="panel-body">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-order_complete">
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
                <?php foreach ($order_complete as $order): ?>
                    <tr>
                        <td><?php echo $order['Id'];?></td>
                        <td><a href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['Id'];?>"><?php echo $order['Customer'];?></a></td>
                        <td><?php echo $order['Createtime'];?></td>
                        <td><?php echo $status[$order['Status']];?></td>
                        <td>
                            <a href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order['Id']; ?>"
                               class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
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
        $('#dataTables-order_complete').DataTable({
            responsive: true,"order":[[0, 'desc']]
        });
    });
</script>
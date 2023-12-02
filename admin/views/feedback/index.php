<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=feedback&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách phản hồi của khách hàng</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-feedback">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Họ tên</th>
                            <th>Điện thoại </th>
                            <th>Email</th>
                            <th>Thông tin</th>
                             <th>Thời gian</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($feedbacks as $feedback): ?>
                            <tr class="odd gradeX">
                                <td class="center"><?php echo $feedback['Id'] ?></td>
                                <td>
                                    <a href="admin.php?controller=feedback&amp;action=edit&amp;fid=<?php echo $feedback['Id']; ?>"><?php echo $feedback['Name']; ?></a>
                                </td>
                                <td class="center"><?php echo $feedback['Mobile'] ?></td>
                                 <td class="center"><?php echo $feedback['Email'] ?></td>
                                <td class="center"><?php echo substring($feedback['Subject'],50); ?></td>
                                 <td class="center"><?php echo $feedback['Createtime'] ?></td>
                                <td>
                                    <a href="admin.php?controller=feedback&amp;action=edit&amp;fid=<?php echo $feedback['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=feedback&amp;action=delete&amp;fid=<?php echo $feedback['Id']; ?>"
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
                $('#dataTables-feedback').DataTable({
                     responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
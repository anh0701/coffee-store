<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=role&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách quyền truy cập</b>
            </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-role">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên gọi</th>
                                <th>Mô tả</th>
                                <th>Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($roles as $role): ?>
                                <tr class="odd gradeX">
                                    <td><h4 class="item_name"><?php echo $role['Id'] ?></h4></td>
                                    <td>
                                        <a href="admin.php?controller=role&amp;action=edit&amp;rid=<?php echo $role['Id']; ?>"><?php echo $role['Name']; ?></a>
                                    </td>
                                    <td><h4 class="item_name"><?php echo $role['Description'] ?></h4></td>

                                    <td>
                                        <a href="admin.php?controller=role&amp;action=edit&amp;rid=<?php echo $role['Id']; ?>"
                                           class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="admin.php?controller=role&amp;action=delete&amp;rid=<?php echo $role['Id']; ?>"
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
                $('#dataTables-role').DataTable({
                     responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
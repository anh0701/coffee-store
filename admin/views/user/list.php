<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách quản trị viên</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-user">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên đăng nhập</th>
                            <th>Email</th>
                            <th>RoleId</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($list_user as $user): ?>
                            <tr class="odd gradeX">
                                <td><h4 class="item_name"><?php echo $user['Id'] ?></h4></td>
                                <td>
                                    <a href="admin.php?controller=user&amp;action=info&amp;uid=<?php echo $user['Id']; ?>"><?php echo $user['Username']; ?></a>
                                </td>
                                <td class="center"><?php echo $user['Email'] ?></td>
                                 <td class="center"><?php echo $user['RoleId'] ?></td>
                                <td>
                                    <a href="admin.php?controller=user&amp;action=edit&amp;uid=<?php echo $user['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=user&amp;action=delete&amp;uid=<?php echo $user['Id']; ?>"
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
                $('#dataTables-user').DataTable({
                     responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
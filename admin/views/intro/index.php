<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=intro&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách phần giới thiệu</b>
            </div>
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-intro">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Trạng thái</th>
                                 <th>Chức năng</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($introduction as $intro): ?>
                                <tr class="odd gradeX">
                                    <td><h4 class="item_name"><?php echo $intro['Id'] ?></h4></td>
                                    <td>
                                        <a href="admin.php?controller=intro&amp;action=edit&amp;iid=<?php echo $intro['Id']; ?>"><?php echo $intro['Title']; ?></a>
                                    </td>
                                    <td><h4 class="item_name"><?php echo $intro['Content'] ?></h4></td>
                                    <td class="center"><?php echo $intro['IsActive'] ?></td>
                                    <td>
                                        <a href="admin.php?controller=intro&amp;action=edit&amp;iid=<?php echo $intro['Id']; ?>"
                                           class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="admin.php?controller=intro&amp;action=delete&amp;iid=<?php echo $intro['Id']; ?>"
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
                $('#dataTables-intro').DataTable({
                     responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
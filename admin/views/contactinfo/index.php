<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=contactinfo&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách phần giới thiệu</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-info">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại 1</th>
                            <th>Email</th>
                            <th>Facebook</th>
                            <th>Zalo</th>
                            <th>Skype</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($contactinfor as $info): ?>
                            <tr class="odd gradeX">
                                <td class="center"><?php echo $info['Id'] ?></td>
                                <td>
                                    <a href="admin.php?controller=contactinfo&amp;action=edit&amp;iid=<?php echo $info['Id']; ?>"><?php echo $info['Address']; ?></a>
                                </td>
                                <td class="center"><?php echo $info['Mobile'] ?></td>
                                 <td class="center"><?php echo $info['Email'] ?></td>
                                <td class="center"><?php echo $info['Facebook'] ?></td>
                                 <td class="center"><?php echo $info['Zalo'] ?></td>
                                <td class="center"><?php echo $info['Skype'] ?></td>
                                <td>
                                    <a href="admin.php?controller=contactinfo&amp;action=edit&amp;iid=<?php echo $info['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=contactinfo&amp;action=delete&amp;iid=<?php echo $info['Id']; ?>"
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
                $('#dataTables-info').DataTable({
                   responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
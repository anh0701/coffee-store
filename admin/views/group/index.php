<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
            <a href="admin.php?controller=group&amp;action=edit" class="btn btn-primary pull-right"><i
                    class="glyphicon glyphicon-plus"></i> Thêm mới</a>

            <div class="panel panel-default">
                <div class="panel-heading text-center">
                   <b> Danh mục nhóm sản phẩm</b>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-group">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên nhóm</th>
                                <th>Tên danh mục</th>
                                <th>Dường dẫn</th>
                                <th>Tác vụ</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($groups as $group): ?>
                                <tr class="odd gradeX">
                                    <td><h4 class="item_name"><?php echo $group['Id'] ?></h4></td>
                                    <td>
                                        <a href="admin.php?controller=group&amp;action=edit&amp;gid=<?php echo $group['Id']; ?>"><?php echo $group['Name']; ?></a>
                                    </td>
                                    <td>
                                        <?php $category = get_a_record('Categories', $group['CategoryId']);
                                        if ($category['Id']!=0) {
                                            echo $category['Name'];
                                        }
                                        ?>

                                    </td>
                                    <td><?php echo $group['Link'] ?></td>
                                    <td>
                                        <a href="admin.php?controller=group&amp;action=edit&amp;gid=<?php echo $group['Id']; ?>"
                                           class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="admin.php?controller=group&amp;action=delete&amp;gid=<?php echo $group['Id']; ?>"
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
                    $('#dataTables-group').DataTable({
                        responsive: true,  "order":[[0, 'desc']]
                    });
                });
            </script>
      </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
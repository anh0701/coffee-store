<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=banner&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách banner</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-banner">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Banner</th>
                            <th>Image</th>
                            <th>Vị trí</th>
                            <th>Trạng thái</th>
                            <th>Mô tả</th>
                            <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($banners as $banner): ?>
                            <tr class="odd gradeX">
                                <td><h4 class="item_name"><?php echo $banner['Id'] ?></h4></td>
                                <td><a href="admin.php?controller=banner&amp;action=edit&amp;bid=<?php echo $banner['Id']; ?>"><?php echo $banner['Name']; ?></a></td>
                                <td class="center"><?php echo '<image src="public/upload/images/' . $banner['Image'] . '?time=' . time() . '" style="max-width:100px;" />'; ?></td>
                                <td class="center"><?php echo $banner['Visible']; ?></a></td>
                                <td class="center"><?php echo $status[$banner['IsActive']];?></td>
                                <td class="center"><?php echo $banner['Description'] ?></td>
                                <td>
                                    <a href="admin.php?controller=banner&amp;action=edit&amp;bid=<?php echo $banner['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=banner&amp;action=delete&amp;bid=<?php echo $banner['Id']; ?>"
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
                $('#dataTables-banner').DataTable({
                    responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
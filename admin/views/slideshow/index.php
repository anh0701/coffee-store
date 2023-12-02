<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=slideshow&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <b>Danh sách Slideshow</b>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-slideshow">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên Slide</th>
                            <th>Image1</th>
                            <th>Image2</th>
                            <th>Image3</th>
                            <th>Image4</th>
                            <th>Image5</th>
                            <th>Status</th>
                             <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($slideshow as $slide): ?>
                            <tr class="odd gradeX">
                                <td><h4 class="item_name"><?php echo $slide['Id'] ?></h4></td>
                                <td>
                                    <a href="admin.php?controller=slideshow&amp;action=edit&amp;sid=<?php echo $slide['Id']; ?>"><?php echo $slide['Name']; ?></a>
                                </td>
                                <?php for($i=1;$i<6;$i++):?>
                                <?php if(empty($slide['img'.$i])){ ?>
                                 <td><h4 class="item_name">Chưa có hình</h4></td>
                               <?php
                                } else { ?>
                                    <td class="center"><?php echo '<image src="public/upload/images/' . $slide['img'.$i] . '?time=' . time() . '" style="max-width:50px;" />'; ?></td>
                                <?php
                                    }
                                ?>
                                <?php endfor;?>
                                <td class="center"><?php echo $slide['status'] ?></td>
                                <td>
                                    <a href="admin.php?controller=slideshow&amp;action=edit&amp;sid=<?php echo $slide['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=slideshow&amp;action=delete&amp;sid=<?php echo $slide['Id']; ?>"
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
                $('#dataTables-slideshow').DataTable({
                     responsive: true,  "order":[[0, 'desc']]
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
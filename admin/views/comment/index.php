<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <a href="admin.php?controller=comment&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
        <div class="panel panel-default">
            <div class="panel-heading">
                Danh sách comment
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-comment">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Sản phẩm</th>
                            <th>Nội dung</th>
                            <th>Ngày tạo</th>
                            <th>Tác giả</th>
                            <th>Trả lời</th>
                            <th>Email</th>
                            <th>Phone</th>
                             <th>Chức năng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($comments as $comment): ?>
                            <tr class="odd gradeX">
                                <td><h4 class="item_name"><?php echo $comment['Id'] ?></h4></td>

                               <td><h4 class="item_name" style="text-align: center;">
                                    <?php $img_product = get_a_record('product', $comment['ProductId']);
                                    $image = 'public/upload/product/'.$img_product['Image1'];
                                    if (is_file($image)) {
                                        echo '<a href="index.php?p=detail&idProduct=' .$img_product['Id'].'"><image src="'.$image.'" style="max-width:50px; max-height:50px;" /></a>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="admin.php?controller=comment&amp;action=edit&amp;comid=<?php echo $comment['Id']; ?>"><?php echo $comment['Content']; ?></a>
                                </td>
                                <td><h5 class="item_name"><?php echo $comment['CreateDate'] ?></h5></td>
                                 <td><h5 class="item_name"><?php echo $comment['Author'] ?></h5></td>

                                  <td><h5 class="item_name">
                                    <?php $comment_parent = get_a_record('comment', $comment['ParentId']);
                                    if ($comment['ParentId']!=0) {
                                        echo $comment_parent['Content'];
                                    }
                                    ?>
                                    </h5></td>
                                <td><h4 class="item_name"><?php echo $comment['Email'] ?></h4></td>
                                <td class="center"><?php echo $comment['Phone'] ?></td>
                                <td>
                                    <a href="admin.php?controller=comment&amp;action=edit&amp;comid=<?php echo $comment['Id']; ?>"
                                       class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="admin.php?controller=comment&amp;action=delete&amp;comid=<?php echo $comment['Id']; ?>"
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
                $('#dataTables-comment').DataTable({
                    responsive: true
                });
            });
        </script>
    </div>
</div>
<?php require('admin/views/shared/footer.php'); ?>
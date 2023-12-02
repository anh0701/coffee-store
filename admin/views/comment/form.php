<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Bình luận</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=comment&amp;action=edit"
          enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $comment ? $comment['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="category_id" class="col-sm-3 control-label">Sản phẩm</label>

            <div class="col-sm-9">
                <select name="productId" class="form-control" id="select">
                    <?php foreach ($products as $product) {
                        $selected = '';
                        if ($comment && ($comment['ProductId'] == $product['Id'])) $selected = 'selected=""';
                        echo '<option  value="' . $product['Id'] . '" ' . $selected . '>' . $product['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <?php if ($comment['ParentId'] != 0): ?>
            <div class="form-group">
                <label for="ParentId" class="col-sm-3 control-label">Reply for</label>

                <div class="col-sm-9">
                    <?php foreach ($replyfor as $reply) {
                        if ($comment && ($comment['ParentId'] == $reply['Id'])) {
                            echo '<input name="parentId" type="text" value="' . $reply['Content'] . '"" class="form-control" disabled/>';
                        }
                    } ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="content" class="col-sm-3 control-label">Nội dung</label>

            <div class="col-sm-9">
                <input name="content" type="text" value="<?php echo $comment ? $comment['Content'] : ''; ?>"
                       class="form-control" id="name" placeholder="Nội dung" required=""/>
            </div>
        </div>
        <div class="form-group">
            <label for="createDate" class="col-sm-3 control-label">Ngày tạo</label>

            <div class="col-sm-9">
                <input name="createDate" type="date" value="<?php echo $comment ? $comment['CreateDate'] : ''; ?>"
                       class="form-control" id="createDate"  min="2000-01-02" max="2016-12-31"/>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-3 control-label">Tác giả</label>

            <div class="col-sm-9">
                <input name="author" type="text" value="<?php echo $comment ? $comment['Author'] : ''; ?>"
                       class="form-control"/>
            </div>
        </div>


        <div class="form-group">
            <label for="Email" class="col-sm-3 control-label">Email</label>

            <div class="col-sm-9">
                <input name="email" type="text" value="<?php echo $comment ? $comment['Email'] : ''; ?>"
                       class="form-control"/>
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone</label>

            <div class="col-sm-9">
                <input name="phone" type="text" value="<?php echo $comment ? $comment['Phone'] : ''; ?>"
                       class="form-control"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary"><?php echo $comment ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=comment">Trở về</a>
            </div>
        </div>
    </form>
</div>
<script>$(document).ready(function () {
        $('#select').prop('disabled', true);
    });
</script>

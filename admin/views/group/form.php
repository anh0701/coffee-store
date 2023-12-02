<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Danh mục nhóm sản phẩm</div>
<div class="panel-body">
    <form id="category-form" class="form-horizontal" method="post" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $group ? $group['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên nhóm danh mục</label>

            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo $group ? $group['Name'] : ''; ?>"
                       class="form-control" id="name" placeholder="Tên danh mục" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="category_id" class="col-sm-3 control-label">Danh mục</label>

            <div class="col-sm-9">
                <select name="category_id" class="form-control" id="category_id">
                    <?php foreach ($categories as $category) {
                        $selected = '';
                        if ($product && ($product['CategoryId'] == $category['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $category['Id'] . '" ' . $selected . '>' . $category['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="link" class="col-sm-3 control-label">Đường dẫn</label>

            <div class="col-sm-9">
                <input name="link" type="text" value="<?php echo $group ? $group['Link'] : ''; ?>"
                       class="form-control" id="name" placeholder="Dường dẫn" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary"><?php echo $group ? 'Cập nhật' : 'Thêm mới' ;?></button>
                <a class="btn btn-warning" href="admin.php?controller=group">Trở về</a>
            </div>
        </div>
    </form>
</div>

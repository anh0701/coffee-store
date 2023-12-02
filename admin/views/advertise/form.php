<style>
    input[type=checkbox], input[type=radio]{
        margin: 10px 5px;
    }
</style>
<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Banner Quảng cáo</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post"
          action="admin.php?controller=advertise&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $advertise ? $advertise['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên Banner</label>

            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo $advertise ? $advertise['Name'] : ''; ?>"
                       class="form-control" id="name" placeholder="Tên Banner" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Trạng thái</label>

            <div class="col-sm-9">
                <input type="radio" name="status"
                    <?php if (isset($advertise) && $advertise['IsActive'] == "1") echo "checked"; ?>
                       value="1">Hoạt động
                <input type="radio" name="status"
                    <?php if (isset($advertise) && $advertise['IsActive'] == "0") echo "checked"; ?>
                       value="0">Tắt
            </div>
        </div>

            <div class="form-group">
                <label for="visible" class="col-sm-3 control-label">Vị trí </label>

                <div class="col-sm-9">
                    <input name="visible" type="text" value="<?php echo $advertise ? $advertise['Visible'] : ''; ?>" class="form-control" id="text"/>
                </div>
            </div>

        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Mô tả </label>

            <div class="col-sm-9">
                <input name="description" type="text" value="<?php echo $advertise ? $advertise['Description'] : ''; ?>" class="form-control" id="text"/>
            </div>
        </div>

            <div class="form-group">
                <label for="image" class="col-sm-3 control-label">Ảnh Banner</label>

                <div class="col-sm-9">
                    <input name="image" type="file" class="form-control" id="image" accept="image/*"/>
                    <?php if ($advertise && is_file('public/upload/images/' . $advertise['Image'])) {
                        echo '<image src="public/upload/images/' . $advertise['Image'] . '?time=' . time() . '" style="max-width:200px;" />';
                    }
                    ?>
                </div>
            </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"
                        class="btn btn-primary"><?php echo $advertise ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=advertise">Trở về</a>
            </div>
        </div>
    </form>



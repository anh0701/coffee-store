<style>
    input[type=checkbox], input[type=radio]{
        margin: 10px 5px;
    }
</style>
<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> SlideShow</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post"
          action="admin.php?controller=slideshow&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $slideshow ? $slideshow['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên Slide</label>

            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo $slideshow ? $slideshow['Name'] : ''; ?>"
                       class="form-control" id="name" placeholder="Tên Slide" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Status</label>

            <div class="col-sm-9">
                <input type="radio" name="status"
                    <?php if (isset($slideshow) && $slideshow['status'] == "1") echo "checked"; ?>
                       value="1">Active
                <input type="radio" name="status"
                    <?php if (isset($slideshow) && $slideshow['status'] == "0") echo "checked"; ?>
                       value="0">Inacctive
            </div>
        </div>

        <?php for ($i = 1; $i < 6; $i++): ?>
            <div class="form-group">
                <label for="text<?php echo $i ?>" class="col-sm-3 control-label">Text <?php echo $i ?></label>

                <div class="col-sm-9">
                    <input name="text<?php echo $i ?>" type="text"
                           value="<?php echo $slideshow ? $slideshow['text' . $i] : ''; ?>"
                           class="form-control" id="text"/>
                </div>
            </div>
            <div class="form-group">
                <label for="image<?php echo $i ?>" class="col-sm-3 control-label">Ảnh <?php echo $i ?></label>

                <div class="col-sm-9">
                    <input name="image<?php echo $i ?>" type="file" class="form-control" id="image<?php echo $i ?>"
                           accept="image/*"/>
                    <?php if ($slideshow && is_file('public/upload/images/' . $slideshow['img' . $i])) {
                        echo '<image src="public/upload/images/' . $slideshow['img' . $i] . '?time=' . time() . '" style="max-width:200px;" />';
                    }
                    ?>
                </div>
            </div>
        <?php endfor; ?>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"
                        class="btn btn-primary"><?php echo $slideshow ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=slideshow">Trở về</a>
            </div>
        </div>
    </form>



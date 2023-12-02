<style>
    input[type=checkbox], input[type=radio] {
        margin: 10px 5px;
    }
</style>
<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Introduction</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post"
          action="admin.php?controller=intro&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $intro ? $intro['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Tiêu đề</label>

            <div class="col-sm-9">
                <input name="title" type="text" value="<?php echo $intro ? $intro['Title'] : ''; ?>"
                       class="form-control" id="title" placeholder="Tiêu đề" required=""/>
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-sm-3 control-label">Nội dung</label>

            <div class="col-sm-9">
                <textarea name="content"  class="form-control" id="content"/><?php echo $intro ? $intro['Content'] : ''; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="status" class="col-sm-3 control-label">Trạng thái</label>

            <div class="col-sm-9">
                <input type="radio" name="status"
                    <?php if (isset($intro) && $intro['IsActive'] == "1") echo "checked"; ?>
                       value="1">Hiện
                <input type="radio" name="status"
                    <?php if (isset($intro) && $intro['IsActive'] == "0") echo "checked"; ?>
                       value="0">Ẩn
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"
                        class="btn btn-primary"><?php echo $intro ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=intro">Trở về</a>
            </div>
        </div>
    </form>
</div>

<script src="admin/themes/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="admin/themes/ckfinder/ckfinder.js"></script>
<script type="text/javascript">CKEDITOR.replace('content',{height: '800px'});</script>


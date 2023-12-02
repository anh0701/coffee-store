<style>
    input[type=checkbox], input[type=radio] {
        margin: 10px 5px;
    }
</style>
<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Quyền truy cập website</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post"
          action="admin.php?controller=role&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $role ? $role['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="title" class="col-sm-3 control-label">Tên quyền truy cập</label>

            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo $role ? $role['Name'] : ''; ?>"
                       class="form-control" id="title" placeholder="Tiêu đề" required="required"/>
            </div>
        </div>
        <div class="form-group">
            <label for="content" class="col-sm-3 control-label">Mô tả</label>

            <div class="col-sm-9">
                <textarea name="description"  class="form-control" rows="5" /><?php echo $role ? $role['Description'] : ''; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"
                        class="btn btn-primary"><?php echo $role ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=role">Trở về</a>
            </div>
        </div>
    </form>
</div>


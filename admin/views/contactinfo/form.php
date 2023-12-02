<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Thông tin liên hệ</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post"
          action="admin.php?controller=contactinfo&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $info ? $info['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Địa chỉ</label>

            <div class="col-sm-9">
                <input name="address" type="text" value="<?php echo $info ? $info['Address'] : ''; ?>"
                       class="form-control" id="address" placeholder="Địa chỉ" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Quận - huyện</label>

            <div class="col-sm-9">
                <input name="country" type="text" value="<?php echo $info ? $info['Country'] : ''; ?>"
                       class="form-control" id="country" placeholder="Quận - huyện" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="mobile" class="col-sm-3 control-label">Điện thoại 1</label>

            <div class="col-sm-9">
                <input name="mobile" type="text" value="<?php echo $info ? $info['Mobile'] : ''; ?>"
                       class="form-control" id="mobile" placeholder="Điện thoại 1" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Điện thoại 2</label>

            <div class="col-sm-9">
                <input name="phone" type="text" value="<?php echo $info ? $info['Phone'] : ''; ?>"
                       class="form-control" id="phone" placeholder="Điện thoại 2" required=""/>
            </div>
        </div>


        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>

            <div class="col-sm-9">
                <input name="email" type="text" value="<?php echo $info ? $info['Email'] : ''; ?>"
                       class="form-control" id="email" placeholder="Email" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Facebook</label>

            <div class="col-sm-9">
                <input name="facebook" type="text" value="<?php echo $info ? $info['Facebook'] : ''; ?>"
                       class="form-control" id="facebook" placeholder="Link Facebook" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="zalo" class="col-sm-3 control-label">Zalo</label>

            <div class="col-sm-9">
                <input name="zalo" type="text" value="<?php echo $info ? $info['Zalo'] : ''; ?>"
                       class="form-control" id="zalo" placeholder="Zalo" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="skype" class="col-sm-3 control-label">Skype</label>

            <div class="col-sm-9">
                <input name="skype" type="text" value="<?php echo $info ? $info['Skype'] : ''; ?>"
                       class="form-control" id="skype" placeholder="Skype" required=""/>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"
                        class="btn btn-primary"><?php echo $info ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=contactinfo">Trở về</a>
            </div>
        </div>
    </form>
</div>


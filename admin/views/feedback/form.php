<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Thông tin phản hồi của khách hàng</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post"
          action="admin.php?controller=feedback&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $feedback ? $feedback['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Họ tên</label>

            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo $feedback ? $feedback['Name'] : ''; ?>"
                       class="form-control" id="name" placeholder="Họ tên" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="mobile" class="col-sm-3 control-label">Điện thoại</label>

            <div class="col-sm-9">
                <input name="mobile" type="text" value="<?php echo $feedback ? $feedback['Mobile'] : ''; ?>"
                       class="form-control" id="mobile" placeholder="Điện thoại" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>

            <div class="col-sm-9">
                <input name="email" type="text" value="<?php echo $feedback ? $feedback['Email'] : ''; ?>"
                       class="form-control" id="email" placeholder="Email" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="subject" class="col-sm-3 control-label">Thông tin</label>

            <div class="col-sm-9">
                <textarea name="subject" rows=5 class="form-control" id="subject"
                          placeholder=""/><?php echo $feedback ? $feedback['Subject'] : ''; ?></textarea>
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit"
                        class="btn btn-primary"><?php echo $feedback ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=feedback">Trở về</a>
            </div>
        </div>
    </form>
</div>
<script src="admin/themes/CKeditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">CKEDITOR.replace('subject',
        enterMode
    :
    CKEDITOR.ENTER_BR,
        shiftEnterMode
    :
    CKEDITOR.ENTER_P
    })
    ;
    )
    ;
</script>

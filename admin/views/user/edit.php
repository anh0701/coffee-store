<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $title ?>
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table class="product-table">
                    <tr>
                        <td> <label for="name" class="col-sm-3 control-label">Username</label></td>
                        <td> <?php echo $user_info ? $user_info['Username'] : ''; ?></td>
                    </tr>

                    <tr>
                        <td>  <label for="Email" class="col-sm-3 control-label">Email</label></td>
                        <td>  <?php echo $user_info ? $user_info['Email'] : ''; ?></td>
                    </tr>

                    <tr>
                        <td> <label for="CreateDate" class="col-sm-3 control-label">CreateDate</label></td>
                        <td> <?php echo $user_info ? $user_info['CreateDate'] : ''; ?></td>
                    </tr>

                    <tr>
                        <td> <label for="RoleId" class="col-sm-3 control-label">RoleId</label></td>
                        <td> <?php echo $user_info ? $user_info['RoleId'] : ''; ?></td>
                    </tr>
                </table><br>

                <form id="user-form" class="form-horizontal" method="post" action="admin.php?controller=user&action=edit" enctype="multipart/form-data" role="form">
                    <input name="id" type="hidden" value="<?php echo $user_info ? $user_info['Id'] : '0'; ?>"/>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Họ và tên</label>
                        <div class="col-sm-9">
                            <input name="name" type="text" value="<?php echo $user_info ? $user_info['Name'] : ''; ?>" class="form-control" id="name" placeholder="Họ và tên" required=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-9">
                            <input name="address" type="text" value="<?php echo $user_info ? $user_info['Address'] : ''; ?>" class="form-control" id="address" placeholder="Địa chỉ"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">Di động</label>
                        <div class="col-sm-9">
                            <input name="phone" type="text" value="<?php echo $user_info ? $user_info['Phone'] : ''; ?>" class="form-control" id="phone" placeholder="Số di động" pattern="[0-9]{10,11}"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image1" class="col-sm-3 control-label">Ảnh Đại Diện</label>
                        <div class="col-sm-9">
                            <input name="Image1" type="file" class="form-control" id="image1" accept="image/*"/><br>
                            <?php if ($user_info && is_file('public/upload/images/' . $user_info['Avatar'])) {
                                echo '<image src="public/upload/images/' . $user_info['Avatar'] . '?time=' . time() . '" style="max-width:50px;" />';
                            }?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-primary"><?php echo $user_info ? 'Cập nhật' : 'Thêm mới' ;?></button>
                            <a class="btn btn-warning" href="admin.php">Trở về</a>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>


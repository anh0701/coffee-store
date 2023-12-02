<?php require('admin/views/shared/header.php'); ?>
<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $title ?>
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper"><?php var_dump($user_info['Id']) ;?>

                <form id="user-form" class="form-horizontal" method="post" action="admin.php?controller=user&action=add" enctype="multipart/form-data" role="form">
                    <input name="id" type="hidden" value="<?php echo $user_info ? $user_info['Id'] : '0'; ?>"/>

                    <div class="form-group">
                        <label for="Username" class="col-sm-3 control-label">Tên đăng nhập</label>
                        <div class="col-sm-9">
                            <input name="username" type="text" value="<?php echo $user_info ? $user_info['Username'] : ''; ?>" class="form-control" id="Username" placeholder="Họ và tên" required=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Password" class="col-sm-3 control-label">Mật khẩu</label>
                        <div class="col-sm-9">
                            <input name="password" type="text" value="<?php echo $user_info ? $user_info['Password'] : ''; ?>" class="form-control" id="Password" placeholder="Địa chỉ"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Name" class="col-sm-3 control-label">Họ tên</label>
                        <div class="col-sm-9">
                            <input name="name" type="text" value="<?php echo $user_info ? $user_info['Name'] : ''; ?>" class="form-control" id="Name" placeholder="Name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="RoleId" class="col-sm-3 control-label">Quyền quản trị</label>
                        <div class="col-sm-9">
                            <input name="roleid" type="text" value="<?php echo $user_info ? $user_info['RoleId'] : ''; ?>" class="form-control" id="RoleId" placeholder="RoleId"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input name="email" type="text" value="<?php echo $user_info ? $user_info['Email'] : ''; ?>" class="form-control" id="Email" placeholder="Email"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-9">
                            <input name="address" type="text" value="<?php echo $user_info ? $user_info['Address'] : ''; ?>" class="form-control" id="Address" placeholder="Address" />
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
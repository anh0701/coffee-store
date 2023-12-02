<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Thông tin cá nhân</div>
<div class="panel-body">
    <table id="user-form" class="form-horizontal">
        <input name="id" type="hidden" value="<?php echo $user_info ? $user_info['Id'] : '0'; ?>"/>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <label for="email" class="col-sm-3 control-label"><?php echo $user_info ? $user_info['Email'] : ''; ?></label>
            </div>
        </div><br>
        <div class="form-group">
            <label for="username" class="col-sm-3 control-label" >Username</label>
            <div class="col-sm-9">
                <label for="email" class="col-sm-3 control-label"><?php echo $user_info ? $user_info['Username'] : ''; ?></label>
            </div>
        </div><br>
        <div class="form-group">
            <label for="createdate" class="col-sm-3 control-label">CreateDate</label>
            <div class="col-sm-9">
                <label for="email" class="col-sm-3 control-label"><?php echo $user_info ? $user_info['CreateDate'] : ''; ?></label>
            </div>
        </div><br>
        <div class="form-group">
            <label for="role" class="col-sm-3 control-label">RoleId</label>
            <div class="col-sm-9">
                <label for="email" class="col-sm-3 control-label"><?php echo $user_info ? $user_info['RoleId'] : ''; ?></label>
            </div>
        </div><br>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Họ và tên</label>
            <div class="col-sm-9">
                <label for="email" class="col-sm-3 control-label"><?php echo $user_info ? $user_info['Name'] : ''; ?></label>
            </div>
        </div><br>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
            <div class="col-sm-9">
                <label for="email" class="col-sm-3 control-label"><?php echo $user_info ? $user_info['Address'] : ''; ?></label>
            </div>
        </div><br>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Di động</label>
            <div class="col-sm-9">
                <label for="email" class="col-sm-3 control-label"><?php echo $user_info ? $user_info['Phone'] : ''; ?></label>
            </div>
        </div><br>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Ảnh Đại Diện</label>
            <div class="col-sm-9">
                <label for="Image1" class="col-sm-3 control-label"> <?php  echo '<image src="public/upload/images/' . $user_info['Avatar'] . '?time=' . time() . '" style="max-width:50px;" class="control-label" />';?></label>
            </div>
        </div><br>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <a href="admin.php?controller=user&amp;action=edit&amp;uid=<?php echo $user_info['Id'];?>" class="btn btn-primary">Cập nhật</a>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Đổi mật khẩu
                </button>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                <form class="contact" name="contact" id="contact"  class="form-horizontal">
                                    <input name="id" type="hidden" value="<?php echo $user_info ? $user_info['Id'] : '0'; ?>"/>
                                    <div class="form-group">
                                        <label for="currentPassword" class="col-sm-5 control-label" >Mật khẩu hiện tại</label>
                                        <div class="col-sm-7">
                                            <input name="currentPassword" id="txtcurrentPassword" type="text" value="" class="form-control"  placeholder="currentPassword" required="required"/>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="newPassword" class="col-sm-5 control-label" >Mật khẩu mới</label>
                                        <div class="col-sm-7">
                                            <input name="newPassword" id="txtNewPassword" type="text" value="" class="form-control"  placeholder="newPassword" required="required"/>
                                        </div>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="confirmPassword" class="col-sm-5 control-label" >Xác nhận mật khẩu mới</label>
                                        <div class="col-sm-7">
                                            <input name="confirmPassword" id="txtConfirmPassword" type="text" value="" class="form-control"  placeholder="confirmPassword" required="required"/>
                                        </div>
                                        <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
                                    </div><br>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Send!" id="submit">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-warning" href="admin.php">Trở về</a>
            </div>
        </div>
    </table>
</div>
<style type="text/css">
    .well { background: #fff; text-align: center; }
    .modal { text-align: left; }
</style>
<script>
    $(document).ready(function () {
        $("input#submit").click(function(){
            if($("#txtcurrentPassword").val()=="") return false;
            if($("#txtNewPassword").val()=="") return false;
            var confirm = $("#txtConfirmPassword").val();
            if(confirm!="") {
                $.ajax({
                    type: "POST",
                    url: "admin/controllers/user/changepassword.php", //
                    data: $('form.contact').serialize(),
                    success: function (msg) {
                        $("#thanks").html(msg)
                        $("#myModal").modal('hide');
                    },
                    error: function () {
                        alert("failure");
                    }
                });
            }
            else {
                alert('Bạn chưa xác nhận mật khẩu mới.');
                $("#txtConfirmPassword").focus();
            }
        });
    });
</script>
<script>
    $(function() {
        $("#txtConfirmPassword").keyup(function() {
            var password = $("#txtNewPassword").val();
            $("#divCheckPasswordMatch").html(password == $(this).val() ? "Mật khẩu mới hợp lệ" : "Mật khẩu xác nhận không trùng khớp");
        });

    });
</script>
<div id="thanks"><p><a data-toggle="modal" href="#myModal" ></a></p></div>
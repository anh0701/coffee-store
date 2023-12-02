<?php
require "../../../lib/model.php";
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $newpassword = md5($_POST['newPassword']);
    $currentpassword = md5($_POST['currentPassword']);
    echo '<b><h4>'.changePassword($id, $newpassword, $currentpassword).'</h4></b>';
}
function changePassword($id, $newpassword,$currentPassword ) {
    $sql = "Update user SET Password='$newpassword' WHERE Id='$id' AND Password = '$currentPassword'";
    $query = mysql_query($sql) or die(mysql_error());
    $rows =  mysql_affected_rows();
    if($rows<>1){
        return "Thay đổi mật khẩu không thành công. Mật khẩu hiện tại của bạn không đúng." . mysql_error();
    }
    else return "Bạn đã đổi mật khẩu thành công. Bạn có thể reset lại trình duyệt và đăng nhập lại hệ thống !";
}
?>
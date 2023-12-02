<?php
function role_delete($id) {
    //  Thực hiện kết nối
    include 'connect.php';
    $id = intval($id);
    $sql = "DELETE FROM role WHERE id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
?>
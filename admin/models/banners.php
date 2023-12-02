<?php
function banner_delete($id) {
    //  Thực hiện kết nối
    include 'connect.php';
    $id = intval($id);
    $banner = get_a_record('banner', $id);
    $image = 'public/upload/images/'.$banner['Image'];
    if (is_file($image)) {
        unlink($image);
    }
    $sql = "DELETE FROM banner WHERE Id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
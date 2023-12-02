<?php
function advertise_delete($id) {
    //  Thực hiện kết nối
    include 'connect.php';
    $id = intval($id);
    $advertise = get_a_record('advertise', $id);
    $image = 'public/upload/images/'.$advertise['Image'];
    if (is_file($image)) {
        unlink($image);
    }
    $sql = "DELETE FROM advertise WHERE Id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
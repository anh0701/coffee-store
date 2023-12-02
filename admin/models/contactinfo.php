<?php
function contactinfo_delete($id) {
    include 'connect.php';
    $id = intval($id);
    $sql = "DELETE FROM contactinfo WHERE id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
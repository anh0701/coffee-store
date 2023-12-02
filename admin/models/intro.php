<?php
function introduction_delete($id) {
    include 'connect.php';
    $id = intval($id);
    $sql = "DELETE FROM intro WHERE id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
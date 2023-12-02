<?php
function comment_delete($comid) {
   
    include 'connect.php';
    $id = intval($comid);
    //x�a ph?n gi?i thi?u
    $sql = "DELETE FROM comment WHERE id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
}
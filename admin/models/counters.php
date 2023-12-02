<?php
function counter_delete($couid) {
    include 'connect.php';
    $couid = intval($couid);
    $sql = "DELETE FROM user_online WHERE session=$couid";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
<?php
function slideshow_delete($id) {
    include 'connect.php';
    $id = intval($id);
    $slideshow = get_a_record('slideshow', $id);
    $image1 = 'public/upload/images/'.$slideshow['img1'];
    if (is_file($image1)) {
        unlink($image1);
    }
    $image2 = 'public/upload/images/'.$slideshow['img2'];
    if (is_file($image2)) {
        unlink($image2);
    }
    $image3 = 'public/upload/images/'.$slideshow['img3'];
    if (is_file($image3)) {
        unlink($image3);
    }
    $image4 = 'public/upload/images/'.$slideshow['img4'];
    if (is_file($image4)) {
        unlink($image4);
    }
    $image5 = 'public/upload/images/'.$slideshow['img5'];
    if (is_file($image5)) {
        unlink($image5);
    }
    $sql = "DELETE FROM slideshow WHERE Id=$id";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
}
<?php

//get menu

//function getSubCategory($id){
//    $sql ="SELECT * FROM `subcategory` WHERE `CategoryId` = $id AND `pId` = 0";
//    return mysql_query($sql);
//}
//counter
function insert_user_online($conn,$session,$time,$ip,$browser,$date){
    $sql="INSERT INTO user_online(session, time, ip, browser, dateonline)VALUES('$session', '$time','$ip','$browser', '$date')";
    return mysqli_query($conn,$sql);
}
function insert_visiter($conn,$session,$time,$ip,$browser,$date){
    $sql="INSERT INTO visiter(session, time, ip, browser, dateonline)VALUES('$session', '$time','$ip','$browser', '$date')";
    return mysqli_query($conn,$sql);
}
function update_user_online($conn,$session,$time,$ip,$browser,$date){
    $sql="UPDATE user_online SET time='$time' ,ip='$ip', browser ='$browser', dateonline ='$date' WHERE session = '$session'";
    return mysqli_query($conn,$sql);
}
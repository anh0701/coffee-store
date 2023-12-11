<?php
function user_login($email, $password) {
    //  Thực hiện kết nối
    include 'connect.php';
    $sql = "SELECT * FROM user WHERE (email='$email' or Username ='$email') AND password='$password' LIMIT 0,1";
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if (mysqli_num_rows($query)>0) {
        $_SESSION['user'] = mysqli_fetch_assoc($query);
        return true;
    }
    return false;
}

function user_signup($email, $username, $name, $password) {
    //  Thực hiện kết nối
    include 'connect.php';
    $date = date("Y-m-d");
    $sql1 = "INSERT user (Username, Password, Name, RoleId, CreateDate,Email) values ('$username', '$password','$name' , 2, '$date','$email')";
    // $query = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    // $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 0,1";
    $query = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    // if (mysqli_num_rows($query)>0) {
    //     $_SESSION['user'] = mysqli_fetch_assoc($query);
    //     return true;
    // }
    // return false;
    return true;
}
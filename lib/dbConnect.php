<?php
/** setting **/
define('BASEURL' , 'http://localhost/coffee-store');
define('BASEPATH', dirname(__FILE__) . '/');
define('PATH_URL', 'http://localhost/coffee-store');
define('PATH_URL_IMG', PATH_URL.'/public/upload/images/');
define('PATH_URL_IMG_PRODUCT', PATH_URL. '/public/upload/product/');

$host = 'localhost';
$namedb = 'ecommerce';
$user= 'root';
$password = '';
global $conn;
// Thực hiện kết nối
$conn = mysqli_connect($host, $user, $password, $namedb);
// Kiểm tra kết nối thành công hay thất bại
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error($conn));
}
// Thông báo kết nối thành công
// echo "Kết nối thành công";
// $db_selected = mysqli_select_db($conn, $namedb);
mysqli_query($conn, "SET NAMES 'UTF8'");
?>
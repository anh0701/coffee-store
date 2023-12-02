<?php
include 'connect.php';
//load model
$pid = intval($_GET['id']);
$product = get_a_record('product', $pid);
if (!$product) {
    show_404();
}else   updateCountView($pid, $conn);

function updateCountView($id, $conn){
    $sql = "Update product set TotalView = TotalView - 1 WHERE id =$id";
    return mysqli_query( $conn, $sql);
}
$title = $product['Name'];


$categories = get_all('categories', array(
    'select' => 'Id, Name',
    'order_by' => 'Id ASC'
));
$subcategories = get_a_record('subcategory', $product['SubCategoryId']);
if ($product['SubCategoryId'] != 0) {
    $breadCrumb = $subcategories['Name'];
}
if (!empty($_POST)) { 
    $name = $_POST['name'];  
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $review = $_POST['review'];
    $date = date("Y-m-d");
    $sql2 = "INSERT INTO `comment` (`Id`, `ProductId`, `Content`, `CreateDate`, `Author`, `ParentId`, `Email`, `Phone`) VALUES (NULL, '$pid', 'oke', '$date', '$name', NULL, '$email', '$phone');"
    mysqli_query($conn, $sql2) or die(mysqli_error($conn));
}
require('website/views/product/view.php');
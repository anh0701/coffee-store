<?php

include 'connect.php';
//load model
$pid = intval($_GET['id']);
$product = get_a_record('product', $pid);
if (!$product) {
    show_404();
}else updateCountView($pid, $conn);

function updateCountView($id, $conn){
    $sql = "Update product set TotalView = TotalView - 1 WHERE id =$id";
    return mysqli_query( $conn,$sql);
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
//load view
require('website/views/product/view.php');
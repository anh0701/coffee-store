<?php
function categories_delete($id) {
    include 'connect.php';
    $id = intval($id);
    require_once('admin/models/products.php');
    $options = array(
        'select' => 'id',
        'where' => 'CategoryId='.$id
    );
    $products = get_all('product', $options);
    foreach ($products as $product) {
        products_delete($product['id']);
    }
    //xóa danh mục
    $sql = "DELETE FROM categories WHERE Id=$id";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
}
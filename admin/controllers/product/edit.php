<?php
//load model
require_once('admin/models/products.php');
if (!empty($_POST)) {
    $name = escape($_POST['name']);

    $product = array(
        'Id' => intval($_POST['id']),
        'CategoryId' => intval($_POST['category_id']),
        'SubCategoryId' => intval($_POST['subcategory_id']),
        'Name' => $name,
        'alias' => alias($name),
        'Size' => escape($_POST['size']),
        'TypeId' => intval($_POST['type_id']),
        'Price' => intval($_POST['price']),
        'Color' => escape($_POST['color']),
        'Material' => escape($_POST['material']),
        'Createdate' => escape($_POST['createdate']),
        'IsSaleOff' => intval($_POST['status']),
        'Percent_off' => intval($_POST['percent_off']),
        'TotalView' => intval($_POST['totalview']),
        'Description' => ($_POST['description'])
    );
    $pid = save('product', $product);
    //upload ảnh 1
    $image_name1 = 'product1'.$pid.'-'.alias($name);
    $config1 = array(
        'name' => $image_name1,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image1 = upload('Image1', $config1);
    //cập nhật ảnh mới
    if($image1){
        $product = array(
            'Id' => $pid,
            'Image1' => $image1
        );
        save('product', $product);
    }
    //upload ảnh 2
    $image_name2 = 'product2'.$pid.'-'.alias($name);
    $config2 = array(
        'name' => $image_name2,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image2 = upload('Image2', $config2);
    //cập nhật ảnh mới
    if($image2){
        $product = array(
            'Id' => $pid,
            'Image2' => $image2
        );
        save('product', $product);
    }
    //upload ảnh 3
    $image_name3 = 'product3'.$pid.'-'.alias($name);
    $config3 = array(
        'name' => $image_name3,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image3 = upload('Image3', $config3);
    //cập nhật ảnh mới
    if($image3){
        $product = array(
            'Id' => $pid,
            'Image3' => $image3
        );
        save('product', $product);
    }
    //upload ảnh 4
    $image_name4 = 'product4'.$pid.'-'.alias($name);
    $config4 = array(
        'name' => $image_name4,
        'upload_path'  => 'public/upload/product/',
        'allowed_exts' => 'jpg|jpeg|png|gif',
    );
    $image4 = upload('Image4', $config4);
    //cập nhật ảnh mới
    if($image4){
        $product = array(
            'Id' => $pid,
            'Image4' => $image4
        );
        save('product', $product);
    }
    //chuyển hướng
    header('location:admin.php?controller=product');
}

if (isset($_GET['pid'])) $pid = intval($_GET['pid']); else $pid=0;
//data
$title = ($pid==0) ? 'Thêm sản phẩm' : 'Sửa sản phẩm';
$user = $_SESSION['user'];
$product = get_a_record('product', $pid);
//Category
$categories = get_all('categories', array(
    'select'=>'Id,Name',
    'order_by' => 'Id'
));
//Sub category
$subcategories = get_all('Subcategory', array(
    'select'=>'Id,Name',
    'order_by' => 'Name'
));
//Type
$types = get_all('type', array(
    'select'=>'Id,Name',
    'order_by' => 'Id'
));
//load view
require('admin/views/product/edit.php');
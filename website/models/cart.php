<?php
/**
 * lưu giỏ hàng vào $_SESSION['cart'] có dạng array
 */
//khởi tạo giỏ hàng
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();

function cart_add($pid){
    if(isset($_SESSION['cart'][$pid])){
        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
        $_SESSION['cart'][$pid]['number']++;
    } else {
        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
        $product = get_a_record('product', $pid);
        
        $_SESSION['cart'][$pid] = array(
            'id' => $pid,
            'name' => $product['Name'],
            'image' => $product['Image1'],
            'number' => 1,
            'typeid' => $product['TypeId'],
            'percent_off' =>$product['Percent_off'],
            'price' => $product['Price']
        );
    }
}
/**
 * Cập nhật số lượng sản phẩm
 * @param int
 * @param int
 */
function cart_update($pid, $number){
    if($number==0){
        //xóa sp ra khỏi giỏ hàng
        unset($_SESSION['cart'][$pid]);
    } else {
        $_SESSION['cart'][$pid]['number'] = $number;
    }
}
/**
 * Xóa sản phẩm ra khỏi giỏ hàng
 * @param int
 */
function cart_delete($pid){
    unset($_SESSION['cart'][$pid]);
}
/**
 * Tổng giá trị giỏ hàng
 */
function cart_total(){
    $total = 0;
    foreach($_SESSION['cart'] as $product){
        if ($product["typeid"] == 3){
            $total += (($product['price']) - ($product['price']) * ($product['percent_off']) / 100)* $product['number'];
        }
        else
        $total += $product['price'] * $product['number'];
    }
    return $total;
}
/**
 * Số sản phẩm có trong giỏ hàng
 */
function cart_number(){
    $number = 0;
    foreach($_SESSION['cart'] as $product){
        $number += $product['number'];
    }
    return $number;
}
/**
 * Danh sách sản phẩm trong giỏ hàng
 */
function cart_list(){
    return $_SESSION['cart'];
}
/**
 * Xóa giỏ hàng
 */
function cart_destroy(){
    $_SESSION['cart'] = array();
}
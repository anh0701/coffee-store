<?php
$cid = intval($_GET['id']);
$category = get_a_record('subcategory', $cid);

if (!$category) {
	show_404();
}

$categories = get_all('subcategory', array(
	'select' => 'Id, Name',
	'order_by' => 'Id ASC'
));

if(isset($_GET['page'])) $page = intval($_GET['page']);
        else $page = 1;

$page = ($page>0) ? $page : 1;
$limit = 15;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'SubCategoryId ='.$cid,
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'Id DESC'
);

$url = 'category/'.$cid. '-' .$category['alias'] ;


$total_rows = get_total('product', $options);
$total = ceil($total_rows/$limit);

$products = get_all('product', $options);
$pagination = pagination($url, $page, $total);

$subcategories = get_a_record('subcategory', $_GET["id"]);
if ($subcategories['Id']!=0) {
    $breadCrumb = $subcategories['Name'];
}
$title = $category['Name'];
//load view
require('website/views/category/index.php');
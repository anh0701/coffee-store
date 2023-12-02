<?php
$gid = intval($_GET['id']);
$category = get_a_record('categories', $gid);
if (!$category) {
	show_404();
}
$categories = get_all('categories', array(
	'select' => 'Id, Name',
	'order_by' => 'position ASC'
));

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 15;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'CategoryId='.$gid,
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'Id DESC'
);

//$url = 'index.php?controller=group&gid='.$gid;
$url = 'group/'.$gid. '-' .$category['alias'] ;
$total_rows = get_total('product', $options);
$total = ceil($total_rows/$limit);

$products = get_all('product', $options);
$pagination = pagination($url, $page, $total);

if ($category['Id']!=0) {
    $breadCrumb = $category['Name'];
}
$title = $category['Name'];
//load view
require('website/views/category/index.php');
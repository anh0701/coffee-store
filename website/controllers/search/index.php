
<?php
$keyword = $_GET["id"];
// var_dump($keyword);
if (isset($_GET['page'])) {$page = intval($_GET['page']);}
else {$page = 1;}

$page = ($page > 0) ? $page : 1;
$limit = 15;
$offset = ($page - 1) * $limit;

$options = array(
    'where' => "Name REGEXP '" . ($keyword) . "'",
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'Id DESC'
);
$url =  str_replace("%20", "+",'index.php?controller=search=' . $keyword) ;
// $urldecode = str_replace("%20", "+", $url);
// var_dump($urldecode);
$total_rows = get_total('product', $options);
// $total_rows = "select * from product where Name like %'$keyword'% limit '$limit'  offset '$offset' order by Id desc" ;
$total = ceil($total_rows / $limit);

//data
$products = get_all('product', $options);
// $pagination = pagination($url, $page, $total);
//load view
require('website/views/search/index.php');
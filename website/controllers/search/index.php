
<?php
$keyword = $_GET["id"];

if (isset($_GET['page'])) $page = intval($_GET['page']);
else $page = 1;

$page = ($page > 0) ? $page : 1;
$limit = 15;
$offset = ($page - 1) * $limit;
$string = 'Name regexp='.$keyword;
$options = array(
    'where' => "Name REGEXP '" . ($keyword) . "'",
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'Id DESC'
);
$url = 'index.php?controller=search&q=' .$keyword;
$total_rows = get_total('product', $options);
$total = ceil($total_rows / $limit);

//data
$products = get_all('product', $options);
$pagination = pagination($url, $page, $total);
//load view
require('website/views/search/index.php');
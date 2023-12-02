<?php
$tid = intval($_GET['id']);
$type = get_a_record('type', $tid);
if (!$type) {
	show_404();
}
$types = get_all('type', array(
	'select' => 'Id, Name',
	'order_by' => 'Id ASC'
));

if(isset($_GET['page'])) $page = intval($_GET['page']); 
        else $page = 1;
        
$page = ($page>0) ? $page : 1;
$limit = 15;
$offset = ($page - 1) * $limit;

$options = array(
	'where' => 'TypeId='.$tid,
    'limit' => $limit,
    'offset' => $offset,
    'order_by' => 'Id DESC'
);

//$url = 'index.php?controller=type&tid='.$tid;
$url = 'type/'.$tid. '-' .$type['alias'] ;
$total_rows = get_total('product', $options);
$total = ceil($total_rows/$limit);
$products = get_all('product', $options);
$pagination = pagination($url, $page, $total);

if ($type['Id']!=0) {
    $breadCrumb = $type['Name'];
}
$title = $type['Name'];
//load view
require('website/views/type/index.php');
<?php
$options_category = array(
    'order_by' => 'Id'
);
$categories = get_all('categories', $options_category);

$options_type = array(
    'order_by' => 'Id'
);
$types = get_all('type', $options_type);

$options_product_new = array(
    'where' => 'TypeId=3',
    'limit' => '2',
    'offset' => '0',
    'order_by' => 'RAND()'
);
$products_new = get_all('product', $options_product_new);
?>
<div class="col-md-3">
    <div class="category-sidebar">
        <div class="widget category-list">
            <h4 class="widget-header">Danh mục</h4>
            <ul class="category-list">
                <?php if (empty($categories)) : ?>
                    <h3 class="col-sm-12">Không có danh mục nào.</h3>
                <?php endif; ?>
                <?php foreach ($categories as $cate): ?>
                    <li>
                        <a href="group/<?php echo $cate['Id'] ?>-<?php echo $cate['alias'] ?>.html"> <?php echo $cate['Name'] ?>
                            <!-- <img class="mr-auto" src="public/content/arrow1.png" alt=""/> -->
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
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
                            <img class="mr-auto" src="public/content/arrow1.png" alt=""/>
                        </a>
                        <ul style="padding-left: 20px">
                            <?php
                            $optionsCate = array('where' => 'CategoryId=' . $cate['Id'] . ' ' . 'and pId = 0',);
                            $subcategory = get_all('subcategory', $optionsCate)
                            ?>
                            <?php foreach ($subcategory as $subcate): ?>
                                <li><a
                                        href="category/<?php echo $subcate['Id'] ?>-<?php echo $subcate['alias'] ?>.html"><?php echo $subcate['Name'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- <div class="widget filter">
            <h4 class="widget-header">Loại sản phẩm</h4>
            <?php if (!empty($types)) : ?>
                <ul class="category-list">
                    <?php foreach ($types as $type): ?>
                        <li>
                            <a href="type/<?php echo $type['Id'] ?>-<?php echo $type['alias'] ?>.html"><?php echo $type['Name'] ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="widget filter">
            <h4 class="widget-header">Sản phẩm</h4>
            <select>
                <option>Phổ biến</option>
                <option value="1">Đánh giá cáo</option>
                <option value="2">Giá thấp</option>
                <option value="4">Giá cao</option>
            </select>
        </div> -->

        <!-- <div class="widget price-range w-100">
            <h4 class="widget-header">Khoảng giá</h4>
            <div class="block">
                <input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5" data-slider-value="[0,5000]">
                <div class="d-flex justify-content-between mt-2">
                    <span class="value">1000000đ - 50000000đ</span>
                </div>
            </div>
        </div> -->
    </div>
</div>
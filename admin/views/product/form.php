<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Sản phẩm</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=product&amp;action=edit"
          enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $product ? $product['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="type_id" class="col-sm-3 control-label">Phân lại</label>

            <div class="col-sm-9">
                <select name="type_id" class="form-control">
                    <?php foreach ($types as $type) {
                        $selected = '';
                        if ($product && ($product['TypeId'] == $type['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $type['Id'] . '" ' . $selected . '>' . $type['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="category_id" class="col-sm-3 control-label">Danh mục</label>

            <div class="col-sm-9">
                <select name="category_id" class="form-control" id="category_id">
                    <?php foreach ($categories as $category) {
                        $selected = '';
                        if ($product && ($product['CategoryId'] == $category['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $category['Id'] . '" ' . $selected . '>' . $category['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="subcategory_id" class="col-sm-3 control-label">Danh mục con</label>

            <div class="col-sm-9">
                <select name="subcategory_id" class="form-control" id="subcategory_id">
                    <?php foreach ($subcategories as $subcategory) {
                        $selected = '';
                        if ($product && ($product['SubCategoryId'] == $subcategory['Id'])) $selected = 'selected=""';
                        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
                    } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Tên sản phẩm</label>

            <div class="col-sm-9">
                <input name="name" type="text" value="<?php echo $product ? $product['Name'] : ''; ?>"
                       class="form-control" id="name" placeholder="Tên sản phẩm" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-sm-3 control-label">Giá sản phẩm</label>

            <div class="col-sm-9">
                <input name="price" type="text"
                       value="<?php echo $product ? number_format($product['Price'], 0, ',', '.') : 0; ?>"
                       class="form-control" id="price" placeholder="0" pattern="[0-9\.]+" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="color" class="col-sm-3 control-label">Màu sắc</label>

            <div class="col-sm-9">
                <input name="color" type="text" value="<?php echo $product ? $product['Color'] : ''; ?>"
                       class="form-control" id="color" placeholder="Mầu sắc" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="material" class="col-sm-3 control-label">Chất liệu</label>

            <div class="col-sm-9">
                <input name="material" type="text" value="<?php echo $product ? $product['Material'] : ''; ?>"
                       class="form-control" id="material" placeholder="Chất liệu" required=""/>
            </div>
        </div>

        <div class="form-group">
            <label for="size" class="col-sm-3 control-label">Size</label>

            <div class="col-sm-9">
                <input name="size" type="text" value="<?php echo $product ? $product['Size'] : ''; ?>"
                       class="form-control" id="size" placeholder="Size"/>
            </div>
        </div>

        <div class="form-group">
            <label for="createdate" class="col-sm-3 control-label">Ngày tạo</label>

            <div class="col-sm-9">

                <input name="createdate" type="date" value="<?php echo $product ? $product['Createdate'] : ''; ?>"
                       class="form-control" id="createdate"  min="2021-11-06"/>
            </div>
        </div>

        <div class="form-group">
            <label for="isSaleOff" class="col-sm-3 control-label">Sale off</label>

            <div class="col-sm-9">
                <input type="radio" name="status"
                    <?php if (isset($product) && $product['isSaleOff'] == "1") echo "checked"; ?>
                       value="1">Bật
                <input type="radio" name="status"
                    <?php if (isset($product) && $product['isSaleOff'] == "0") echo "checked"; ?>
                       value="0">Tắt
            </div>
        </div>

        <div class="form-group">
            <label for="percent_off" class="col-sm-3 control-label">Phần trăm giảm giá</label>

            <div class="col-sm-9">
                <input name="percent_off" type="text" value="<?php echo $product ? $product['Percent_off'] : ''; ?>"
                       class="form-control" id="Percent_off" placeholder="Phần trăm giảm giá"/>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Thông tin chi tiết</label>

            <div class="col-sm-9">
                <textarea name="description"  class="form-control" id="description"
                          placeholder="Thông tin sản phẩm"/><?php echo $product ? $product['Description'] : ''; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="totalview" class="col-sm-3 control-label">Số lượng</label>

            <div class="col-sm-9">
                <input name="totalview" type="text" value="<?php echo $product ? $product['TotalView'] : ''; ?>"
                       class="form-control" id="totalview" placeholder="Số lượng"/>
            </div>
        </div>

        <div class="form-group">

            <div class="col-sm-3">
                <label for="image1" class="col-sm-9 control-label">Ảnh 1</label>
                <input name="Image1" type="file" class="form-control" id="image1" accept="image/*"/>
                <?php if ($product && is_file('public/upload/product/' . $product['Image1'])) {
                    echo '<image src="public/upload/product/' . $product['Image1'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div class="col-sm-3">
                <label for="image2" class="col-sm-9 control-label">Ảnh 2</label>
                <input name="Image2" type="file" class="form-control" id="image2" accept="image/*"/>
                <?php if ($product && is_file('public/upload/product/' . $product['Image2'])) {
                    echo '<image src="public/upload/product/' . $product['Image2'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div class="col-sm-3">
                <label for="image3" class="col-sm-9 control-label">Ảnh 3</label>
                <input name="Image3" type="file" class="form-control" id="image3" accept="image/*"/>
                <?php if ($product && is_file('public/upload/product/' . $product['Image3'])) {
                    echo '<image src="public/upload/product/' . $product['Image3'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>

            <div class="col-sm-3">
                <label for="image4" class="col-sm-9 control-label">Ảnh 4</label>
                <input name="Image4" type="file" class="form-control" id="image4" accept="image/*"/>
                <?php if ($product && is_file('public/upload/product/' . $product['Image4'])) {
                    echo '<image src="public/upload/product/' . $product['Image4'] . '?time=' . time() . '" style="max-width:150px;" />';
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary"><?php echo $product ? 'Cập nhật' : 'Thêm mới'; ?></button>
                <a class="btn btn-warning" href="admin.php?controller=product">Trở về</a>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $("#category_id").change(function(){
            var cid = $(this).val();
            $.get("admin/views/product/getcategory.php",{cid:cid},function(data){
                $("#subcategory_id").html(data);
            });
        });
    });
</script>

<script src="admin/themes/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="admin/themes/ckfinder/ckfinder.js"></script>
<script type="text/javascript">CKEDITOR.replace('description',{height: '800px'});</script>

<?php
require "../../../lib/model.php";
$cid = intval($_GET['cid']);
$subcategories = get_all('Subcategory', array(
    'where' => 'CategoryId='.$cid,
    'select'=>'Id,Name',
    'order_by' => 'Name'
));

?>
<select name="subcategory_id" class="form-control" id="subcategory_id">
    <?php foreach ($subcategories as $subcategory) {
        echo '<option value="' . $subcategory['Id'] . '" ' . $selected . '>' . $subcategory['Name'] . '</option>';
    } ?>
</select>
<select class="form-select" id="bid" name="bid">
<?php
while ($brandItem = $brandList->fetch_assoc()) {
  $selText = "";
  if ($selectedBrand == $brandItem['brand_id']){
    $selText = " Selected";
  }
  ?>
    <option value="<?php echo $brandItem['brand_id']; ?>"<?=$selText?>><?php echo $brandItem['brand_name']; ?></option>
  <?php
}
?>
</select>

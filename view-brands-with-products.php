<div class = "row">
  <div class = "col">
<h1>Brands with Products</h1>
  </div>
  <div class = "col-auto">
    <?php
    include "view-brands-with-products-newform.php";
    ?>
  </div>
</div>

<div class="card-group">
<?php
while ($brand = $brands->fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $brand['brand_name']; ?></h5>
      <p class="card-text">
      <ul class="list-group">
      <?php
        $products = selectBrandsByProducts($brand['brand_id']);
        while ($product = $products->fetch_assoc()) {
      ?>
        <li class="list-group-item">
          <?php echo $product['product_name']; ?> - 
          <?php echo $product['product_category']; ?> - 
          <?php echo $product['product_gr']; ?> 

          <div class="d-flex justify-content-end">
            <?php include "view-brands-with-products-editform.php"; ?> 
            <form method="post" action="" class="ms-2">
              <input type="hidden" name="pid" value="<?php echo $product['product_id']; ?>">
              <input type="hidden" name="actionType" value="Delete">
              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-x" viewBox="0 0 16 16">
                  <path d="M6.854 7.146a.5.5 0 1 0-.708.708L7.293 9l-1.147 1.146a.5.5 0 0 0 .708.708L8 9.707l1.146 1.147a.5.5 0 0 0 .708-.708L8.707 9l1.147-1.146a.5.5 0 0 0-.708-.708L8 8.293z"/>
                  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                </svg>
              </button>
            </form>
          </div>
        </li>
      <?php    
        }
      ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Brand Origin: <?php echo $brand['brand_origin']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>

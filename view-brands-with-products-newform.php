<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatalogModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
      <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5"/>
      <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585q.084.236.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5q.001-.264.085-.5M8.5 6.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5a.5.5 0 0 1 1 0"/>
    </svg>
</button>

<div class="modal fade" id="newCatalogModal" tabindex="-1" aria-labelledby="newCatalogModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newCatalogModalLabel">New Catalog</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="nam" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="nam" name = "nam">
          </div>
          <div class="mb-3">
            <label for="cat" class="form-label">Product Category</label>
            <input type="text" class="form-control" id="cat" name = "cat">
          </div>
          <div class="mb-3">
            <label for="gr" class="form-label">Product Gear Ratio</label>
            <input type="text" class="form-control" id="gr" name = "gr">
          </div>
          <div class="mb-3">
            <label for="bid" class="form-label">Brand ID</label>
<?php
$brandList = selectBrandsForInput();
$selectedBrand = 0;
include "view-brand-input-list.php";
?>
          </div>
            <input type = "hidden" name = "actionType" value = "Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary btn-sm" style="width: 40px; height: 40px;" data-bs-toggle="modal" data-bs-target="#editBrandModal<?php echo $brand['brand_id']; ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
    </svg>
</button>

<div class="modal fade" id="editBrandModal<?php echo $brand['brand_id']; ?>" tabindex="-1" aria-labelledby="editBrandModalLabel<?php echo $brand['brand_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editBrandModalLabel<?php echo $brand['brand_id']; ?>">Edit Brand</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="bName<?php echo $brand['brand_id']; ?>" class="form-label">Brand Name</label>
            <input type="text" class="form-control" id="bName<?php echo $brand['brand_id']; ?>" name = "bName" value="<?php echo $brand['brand_name']; ?>">
          </div>
          <div class="mb-3">
            <label for="bOrigin<?php echo $brand['brand_id']; ?>" class="form-label">Brand Origin</label>
            <input type="text" class="form-control" id="bOrigin<?php echo $brand['brand_id']; ?>" name = "bOrigin" value="<?php echo $brand['brand_origin']; ?>">
          </div>
            <input type="hidden" name = "bid" value="<?php echo $brand['brand_id']; ?>">
            <input type = "hidden" name = "actionType" value = "Edit">
          <button type="submit" class="btn btn-success">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>

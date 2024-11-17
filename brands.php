<?php
require_once("util-db.php");
require_once("model-brands.php");

$pageTitle = "Brands";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertBrands($_POST['bName'], $_POST['bOrigin'])) {
        echo '<div class="alert alert-success" role="alert">Brand Added</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateBrands($_POST['bName'], $_POST['bOrigin'], $_POST['bid'])) {
        echo '<div class="alert alert-success" role="alert">Brand Edited</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteBrands($_POST['bid'])) {
        echo '<div class="alert alert-success" role="alert">Brand Deleted</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$brands = selectBrands();
include "view-brands.php";
include "view-footer.php";
?>

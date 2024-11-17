<?php
require_once("util-db.php");
require_once("model-brands-with-products.php");

$pageTitle = "Brands with Products";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertCatalog($_POST['nam'], $_POST['cat'], $_POST['gr'], $_POST['bid'])) {
        echo '<div class="alert alert-success" role="alert">Catalog Added</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateCatalog($_POST['nam'], $_POST['cat'], $_POST['gr'], $_POST['bid'], $_POST['pid'])) {
        echo '<div class="alert alert-success" role="alert">Catalog Edited</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteCatalog($_POST['pid'])) {
        echo '<div class="alert alert-success" role="alert">Catalog Deleted</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$brands = selectBrands();
include "view-brands-with-products.php";
include "view-footer.php";
?>

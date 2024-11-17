<?php
require_once("util-db.php");
require_once("model-ceos.php");

$pageTitle = "CEOs";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch($_POST['actionType']) {
    case "Add":
      if (insertCeos($_POST['cName'], $_POST['cAge'], $_POST['cbrandid'])) {
        echo '<div class="alert alert-success" role="alert">CEO Added</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateCeos($_POST['cName'], $_POST['cAge'], $_POST['cbrandid'], $_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">CEO Edited</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteCeos($_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">CEO Deleted</div>';
      } else {
          echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$ceos = selectCeos();
include "view-brands.php";
include "view-footer.php";
?>

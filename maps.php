<?php
require_once("util-db.php");
require_once("model-maps.php");

$pageTitle = "Dealer Locations";
include "view-header.php";
$locations = selectDealerLocations();
include "view-maps.php";
include "view-footer.php";
?>

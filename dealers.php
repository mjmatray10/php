<?php
require_once("util-db.php");
require_once("model-dealers.php");

$pageTitle = "Dealer Record Table";
include "view-header.php";
$dealers = selectDealer();
include "view-dealers.php";
include "view-footer.php";
?>
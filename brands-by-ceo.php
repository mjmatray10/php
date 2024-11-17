<?php
require_once("util-db.php");
require_once("model-brands-by-ceo.php");

$pageTitle = "CEO of Brand";
include "view-header.php";
$ceos = selectBrandsByCeos($_GET['id']);
include "view-brands-by-ceo.php";
include "view-footer.php";
?>

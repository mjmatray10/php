<?php
$pageTitle = "Home";
include "view-header.php";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <style>
      body {
        background-color: #343a40;
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .content-container {
        background-color: #3d4349;
        padding: 20px;
        border-radius: 10px;
        max-width: 1200px;
        margin: 20px auto;
        color: #f8f9fa;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }
  </style>
</head>
<body>
  <div class="content-container">
    <h1>MIS-4013 Final Project</h1>
    <p>Welcome to the Bar G Tackle Company!</p>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 700px;">
      <img src="logo.png">
    </div>
  </div>
</body>
</html>
<?php
include "view-footer.php";
?>

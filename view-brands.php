<?php
$pageTitle = "Brands";
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
      .table {
        color: #ffffff;
      }
      .table th, .table td {
        vertical-align: middle;
      }
      .table th {
        background-color: #495057;
      }
      .table-striped tbody tr:nth-of-type(odd) {
        background-color: #3e444a;
      }
      .table a {
        color: #0dcaf0;
        text-decoration: none;
      }
      .table a:hover {
        text-decoration: underline;
      }
  </style>
</head>
<body>
  <div class="content-container">
    <h1>Brands</h1>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
           <tr style="color: white;">
              <th>ID</th>
              <th>Name</th>
              <th>Origin</th>
              <th></th>
          </tr>
        </thead>
        <tbody>
        <?php
        while ($brand = $brands->fetch_assoc()) {
          ?>
          <tr>
            <td><?= htmlspecialchars($brand['brand_id']); ?></td>
            <td><?= htmlspecialchars($brand['brand_name']); ?></td>
            <td><?= htmlspecialchars($brand['brand_origin']); ?></td>
            <td><a href="brands-by-stores.php?id=<?= htmlspecialchars($brand['brand_id']); ?>">Stores</a></td>
          </tr>
          <?php
        }
        ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
<?php
include "view-footer.php";
?>

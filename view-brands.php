<h1>Brands</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
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
    <td><?php echo $brand['brand_id']; ?></td>
    <td><?php echo $brand['brand_name']; ?></td>
    <td><?php echo $brand['brand_origin']; ?></td>
    <td><a href = "brands-by-stores.php?id=<?php echo $brand['brand_id']; ?>">Stores</a></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>

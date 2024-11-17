<h1>Brands by CEO</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Age</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($ceo = $ceos->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $ceo['ceo_id']; ?></td>
    <td><?php echo $ceo['ceo_name']; ?></td>
    <td><?php echo $ceo['ceo_age']; ?></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>

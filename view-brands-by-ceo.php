<?php
$pageTitle = "CEO of Brand";
?>
<body>
<div class="content-container">
    <h1>CEO of Brand</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr style="color: white;">
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th></th>
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

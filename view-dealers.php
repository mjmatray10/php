<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dealer Records</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>

<h1>Dealers</h1>

<table id="dealer-records" class="display">
  <thead>
    <tr>
      <th>Dealer Name</th>
      <th>Oklahoma Location</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $results = selectDealers();
    while ($row = $results->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['dealer_name'] . "</td>
                <td>" . $row['dealer_ok'] . "</td>
              </tr>";
    }
    ?>
  </tbody>
</table>

<script>
  $(document).ready(function() {
    $('#dealer-records').DataTable({
    });
  });
</script>

</body>
</html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dealer Records</title>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

  <style>
    #dealer-records {
      color: black;
    }
    #dealer-records th {
      color: white;
    }
    
    #dealer-records td {
      color: black;
    }

    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_length {
      color: white !important;
    }

    .dataTables_wrapper .paginate_button {
      color: white !important;
      border: 1px solid #ddd;
    }

    .dataTables_wrapper .dataTables_filter input {
      color: white !important;
    }

    .dataTables_wrapper .dataTables_length select {
      color: white !important;
    }

    .dataTables_wrapper th.sorting_asc::after,
    .dataTables_wrapper th.sorting_desc::after {
      color: white !important;
    }

    .dataTables_wrapper .paginate_button.previous,
    .dataTables_wrapper .paginate_button.next {
      color: white !important;
    }
    
  </style>
</head>
<body>

      <div class="content-container">
<div>
  <h1>Dealers</h1>
</div>
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
</div>

<script>
  $(document).ready(function() {
    $('#dealer-records').DataTable();
  });
</script>

</body>
</html>

<!DOCTYPE html>
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

    .animated-button {
      display: inline-block;
      padding: 15px 30px;
      font-size: 16px;
      font-weight: bold;
      color: #ffffff;
      background-color: #28a745;
      text-decoration: none;
      text-align: center;
      border-radius: 25px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .animated-button:hover {
      transform: translateY(-5px);
      background-color: #218838;
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
    }

    .animated-button:active {
      transform: translateY(-2px);
      background-color: #1e7e34;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>
  <div class="content-container">
    <div style="display: flex; flex-direction: row; align-items: center; justify-content: space-between; width: 100%;">
      <div style="flex: 1; text-align: left;">
        <h1>Dealers</h1>
      </div>
      <div style="flex: 1; text-align: center;">
        <a href="maps.php" class="animated-button">Find on Map</a>
      </div>
      <div style="flex: 1;"></div>
    </div>

    <div>
      <table id="dealer-records" class="display">
        <thead>
          <tr>
            <th>Dealer Name</th>
            <th>Oklahoma Location?</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $results = selectDealers();
          while ($row = $results->fetch_assoc()) {
              echo "<tr>
                      <td>" . htmlspecialchars($row['dealer_name']) . "</td>
                      <td>" . htmlspecialchars($row['dealer_ok']) . "</td>
                    </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#dealer-records').DataTable();
    });
  </script>
</body>
</html>

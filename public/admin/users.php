<?php
$con = mysqli_connect("localhost", "root", "", "alakhvz7_printbook");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data
$domestic = mysqli_query($con, "SELECT * FROM domestic_buyers ORDER BY id DESC");
$international = mysqli_query($con, "SELECT * FROM international_buyers ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <?php include "sidebar.php"; ?>

    <!-- Main Content -->
    <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4 py-4 content">
      <h2 class="mb-4 text-center">Buyers Dashboard</h2>

      <!-- Nav Tabs -->
      <ul class="nav nav-tabs mb-4" id="buyerTabs" role="tablist">
          <li class="nav-item" role="presentation">
              <button class="nav-link active" id="domestic-tab" data-bs-toggle="tab" data-bs-target="#domestic" type="button" role="tab">Domestic Buyers</button>
          </li>
          <li class="nav-item" role="presentation">
              <button class="nav-link" id="international-tab" data-bs-toggle="tab" data-bs-target="#international" type="button" role="tab">International Buyers</button>
          </li>
      </ul>

      <!-- Tab Content -->
      <div class="tab-content" id="buyerTabsContent">

          <!-- Domestic Buyers -->
          <div class="tab-pane fade show active" id="domestic" role="tabpanel">
              <div class="table-responsive">
                  <table class="table table-striped table-hover table-bordered datatable">
                      <thead class="table-dark">
                          <tr>
                              <th>ID</th>
                              <th>Date</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>City/Village</th>
                              <th>Pincode</th>
                              <th>English</th>
                              <th>Hindi</th>
                              <th>Telugu</th>
                              <th>Gujarati</th>
                              <th>Marathi</th>
                              <th>Total Books</th>
                              <th>Order Cost</th>
                              <th>Gateway</th>
                              <th>Order ID</th>
                              <th>Verified</th>
                              <th>Dispatch Status</th>
                              <th>Agency</th>
                              <th>Tracking No</th>
                              <th>Dispatch Date</th>
                              <th>Postage</th>
                              <th>Paid By</th>
                              <th>Email Info</th>
                              <th>Delivery Status</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php while ($row = mysqli_fetch_assoc($domestic)): ?>
                          <tr>
                              <td><?= $row['ID'] ?></td>
                              <td><?= $row['dateoforderDB'] ?></td>
                              <td><?= $row['fullnameDB'] ?></td>
                              <td><?= $row['emailidDB'] ?></td>
                              <td><?= $row['phonenoDB'] ?></td>
                              <td><?= $row['fulladdressDB'] ?></td>
                              <td><?= $row['cityvillagenameDB'] ?></td>
                              <td><?= $row['pincodeDB'] ?></td>
                              <td><?= $row['englishbookcountDB'] ?></td>
                              <td><?= $row['hindibookcountDB'] ?></td>
                              <td><?= $row['telugubookcountDB'] ?></td>
                              <td><?= $row['gujaratibookcountDB'] ?></td>
                              <td><?= $row['marathibookcountDB'] ?></td>
                              <td><?= $row['bookcountDB'] ?></td>
                              <td><?= $row['totalordercostDB'] ?></td>
                              <td><?= $row['gatewayDB'] ?></td>
                              <td><?= $row['order_idDB'] ?></td>
                              <td><?= $row['paymentvarifiedDB'] ?></td>
                              <td><?= $row['dispatchstatusDB'] ?></td>
                              <td><?= $row['dispatchagencyDB'] ?></td>
                              <td><?= $row['trackingnoDB'] ?></td>
                              <td><?= $row['dateofdispatchDB'] ?></td>
                              <td><?= $row['postagechargeDB'] ?></td>
                              <td><?= $row['paidbyDB'] ?></td>
                              <td><?= $row['emailinfoDB'] ?></td>
                              <td><?= $row['deliverystatusDB'] ?></td>
                          </tr>
                          <?php endwhile; ?>
                      </tbody>
                  </table>
              </div>
          </div>

          <!-- International Buyers -->
          <div class="tab-pane fade" id="international" role="tabpanel">
              <div class="table-responsive">
                  <table class="table table-striped table-hover table-bordered datatable">
                      <thead class="table-dark">
                          <tr>
                              <th>ID</th>
                              <th>Full Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>City</th>
                              <th>Country</th>
                              <th>Postal Code</th>
                              <th>Book Count</th>
                              <th>Total Cost</th>
                              <th>Date of Order</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php while ($row = mysqli_fetch_assoc($international)): ?>
                          <tr>
                              <td><?= $row['ID'] ?></td>
                              <td><?= $row['fullnameDB'] ?></td>
                              <td><?= $row['emailidDB'] ?></td>
                              <td><?= $row['phonenoDB'] ?></td>
                              <td><?= $row['fulladdressDB'] ?></td>
                              <td><?= $row['citynameDB'] ?></td>
                              <td><?= $row['countrynameDB'] ?></td>
                              <td><?= $row['postalcodeDB'] ?></td>
                              <td><?= $row['bookcountDB'] ?></td>
                              <td><?= $row['totalordercostDB'] ?></td>
                              <td><?= $row['dateoforderDB'] ?></td>
                          </tr>
                          <?php endwhile; ?>
                      </tbody>
                  </table>
              </div>
          </div>

      </div>
    </main>

  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        $('.datatable').DataTable({
            pageLength: 10,
            lengthMenu: [5, 10, 25, 50, 100]
        });
    });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="shortcut icon" type="image/png" href="../favicon/favicon.ico" />
  <link rel="stylesheet" href="../assets/css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Wait Process</title>

</head>

<body class="link-sidebar">

  <div id="main-wrapper">

    <?php require_once("./page/sidebar.php") ?>
    <div class="page-wrapper">

      <?php require_once("./page/header.php") ?>
      <!-- sidebar-horizon.php -->


      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="datatables">
            <div class="card">
              <div class="card-body">
                <h3>URLs Checker</h3>
                <form class="floating-labels mt-4 pt-2" id="urlForm" method="POST">
                  <div class="form-group mb-4">
                    <textarea class="form-control" rows="4" id="urls" name="urls" placeholder="Enter up to 100 URLs. One Url per line"></textarea>
                    <span class="bar"></span><br>
                    <h2 style="text-align:center">Total Urls: <span id="lineCount">0</span></h2>
                    <div class="p-2 text-center">
                      <button class="btn btn-lg btn-outline-primary col-lg-2" id="submitBtn">Check</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- start Default Ordering -->
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">DataTable</h4>
                <div class="table-responsive">
                  <table id="DomainTable" class="table table-striped table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Domain</th>
                        <th>Index Domain</th>
                        <th>Index Name</th>
                        <th>Full Domain</th>
                        <th>Name</th>
                        <th>Full Name</th>
                        <th>Create at</th>
                        <th>Update at</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>Domain</th>
                        <th>Index Domain</th>
                        <th>Index Name</th>
                        <th>Full Domain</th>
                        <th>Name</th>
                        <th>Full Name</th>
                        <th>Create at</th>
                        <th>Update at</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
            <!-- end Default Ordering -->

          </div>
        </div>
      </div>
    </div>

    <?php require_once("./page/setting.php") ?>


    <div class="dark-transparent sidebartoggler"></div>
    <script src="../assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="../assets/js/theme/app.init.js"></script>
    <script src="../assets/js/theme/theme.js"></script>
    <script src="../assets/js/theme/app.min.js"></script>
    <script src="../assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatable-basic.init.js"></script>
</body>
<script src="../API/Send_API.js"></script>
<script>
  $(document).ready(function() {
    var table = $('#DomainTable').DataTable({
      scrollX: true,
      responsive: false,
      autoWidth: false,
      "order": [
        [6, 'desc']
      ],

      ajax: {
        url: 'http://localhost:3000/table/listIndex',
        dataSrc: 'results',
      },
      columns: [{
          data: 'domain'
        },
        {
          data: 'index_domain',
          render: function(data) {
            if (data === 'true') {
              return '<img src="../img/true.png" alt="true" width="40">';
            } else if (data === 'false') {
              return '<img src="../img/false.png" alt="false" width="40">';
            } else if (data === 'dnf') {
              return '<img src="../img/no-results.png" alt="no-results" width="40">';
            } else {
              return '<img src="../img/search.png" alt="กำลังหาข้อมูล" width="40">';
            }
          }
        },
        {
          data: 'index_name',
          render: function(data) {
            if (data === 'true') {
              return '<img src="../img/true.png" alt="true" width="40">';
            } else if (data === 'false') {
              return '<img src="../img/false.png" alt="false" width="40">';
            } else if (data === 'dnf') {
              return '<img src="../img/no-results.png" alt="no-results" width="40">';
            } else {
              return '<img src="../img/search.png" alt="กำลังหาข้อมูล" width="40">';
            }
          }
        },
        {
          data: 'full_index_domain',
          render: function(data) {
            return data ? data : 'กำลังค้นหาข้อมูล...';
          }
        },
        {
          data: 'name'
        },
        {
          data: 'full_index_name',
          render: function(data) {
            return data ? data : 'กำลังค้นหาข้อมูล...';
          }
        },
        {
          data: 'domain_create_at'
        },
        {
          data: 'index_update_at'
        },

      ]
    });
    
  });
</script>
<script>
  const textarea = document.getElementById('urls');
  const lineCount = document.getElementById('lineCount');

  function countLines() {

    const lines = textarea.value.split('\n').filter(line => line.trim() !== "").length;
    lineCount.textContent = lines;
  }

  textarea.addEventListener('input', countLines);
</script>

</html>
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="./favicon/favicon.ico" />
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Domain Checker</title>
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
                <h3>Domain Checker</h3>
                <form class="floating-labels mt-4 pt-2" id="urlForm" method="POST">
                  <div class="form-group mb-4">
                    <textarea class="form-control" rows="4" id="urls" name="urls" placeholder="Enter up to 100 URLs. One Url per line"></textarea>
                    <span class="bar"></span><br>
                    <h2 style="text-align:center">Total Urls: <span id="lineCount">0</span></h2>
                    <div class="p-2 text-center">
                      <button class="btn btn-lg btn-outline-primary col-lg-2" id="submitBtn" >Check</button>
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
    <script src="./assets/js/vendor.min.js"></script>
    <!-- Import Js Files -->
    <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="./assets/js/theme/app.init.js"></script>
    <script src="./assets/js/theme/theme.js"></script>
    <script src="./assets/js/theme/app.min.js"></script>
    <script src="./assets/js/theme/sidebarmenu.js"></script>

    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="./assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="./assets/js/datatable/datatable-basic.init.js"></script>
</body>
<script src="./API/Send_API.js"></script>
<script>
  $(document).ready(function() {
    const table = $('#DomainTable').DataTable({
      scrollX: true,
      responsive: false,
      autoWidth: false,
      "order": [
        [0, 'desc']
      ],
      deferRender: true,
      pageLength: 100,
    });


    const eventSource = new EventSource('http://localhost:3000/table/sse');

    eventSource.onmessage = function(event) {

      const data = JSON.parse(event.data);

      table.clear();


      data.forEach(item => {



        const indexDomain = item.index_domain === 'true' ?
          '<img src="./img/true.png" alt="True" width="40">' :
          item.index_domain === 'false' ?
          '<img src="./img/false.png" alt="False" width="40">' :
          '<img src="./img/search.png" alt="search" width="40">';

        const indexName = item.index_name === 'true' ?
          '<img src="./img/true.png" alt="True" width="40">' :
          item.index_name === 'false' ?
          '<img src="./img/false.png" alt="False" width="40">' :
          '<img src="./img/search.png" alt="search" width="40">';

        // const newData =   '<img src="./img/new.png" alt="Top 5" width="30">' ;

        const newData = item.update_at && isRecent(item.update_at) ?
          '<img src="./img/new.png" alt="Top 5" width="30">' :
          '';


        function isRecent(updateAt) {
          const now = new Date();
          const updateTime = new Date(updateAt);
          const diffInMinutes = (now - updateTime) / (1000 * 60);
          return diffInMinutes <= 30;
        }

        table.row.add([
          // item.id,
          item.domain + newData,
          indexDomain,
          indexName,
          item.full_index_domain ? item.full_index_domain : "กำลังค้นหาข้อมูล กรุณารอสักครู่...",
          item.name,
          item.full_index_name ? item.full_index_name : "กำลังค้นหาข้อมูล กรุณารอสักครู่...",
          item.index_create_at,
          item.index_update_at
        ]);
      });


      table.draw();
    };

    eventSource.onerror = function(error) {
      console.error('SSE Error:', error);
    };
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
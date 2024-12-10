<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="../favicon/favicon.ico" />

  <!-- Core Css -->
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <title>Index Domain</title>
  <link rel="stylesheet" href="../assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" />
</head>

<body class="link-sidebar">

  <div id="main-wrapper">
  
  <?php require_once("./page/sidebar.php")?>
    <div class="page-wrapper">
   
    <?php require_once("./page/header.php")?>
    <!-- sidebar-horizon.php -->
      

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="datatables">
            
            <!-- start Default Ordering -->
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">DataTable</h4>
                <div class="table-responsive">
                  <table id="default_order" class="table table-striped table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                   
                    
                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
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
   
    <?php require_once("./page/setting.php")?>


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

</html>
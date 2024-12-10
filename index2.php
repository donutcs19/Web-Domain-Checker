
<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="./assets/css/styles.css" />

  <title>URLs Checker</title>
  <link rel="stylesheet" href="./assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="icon" type="image/x-icon" href="./favicon/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

</head>

<body class="link-sidebar">

  <div id="main-wrapper">
    <?php require_once("./page/sidebar.php")?>
    <!--  Sidebar End -->
    <div class="page-wrapper">
      <!--  Header Start -->
      <header class="topbar">
        <div class="with-vertical">
          <!-- ---------------------------------- -->
          <!-- Start Vertical Layout Header -->
          <!-- ---------------------------------- -->
          <nav class="navbar navbar-expand-lg p-0">
            <ul class="navbar-nav">
              <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="ti ti-search"></i>
                </a>
              </li>
            </ul>
<!-- 
            <ul class="navbar-nav quick-links d-none d-lg-flex align-items-center">
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="#">Chat</a>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="#">Calendar</a>
              </li>
              <li class="nav-item dropdown-hover d-none d-lg-block">
                <a class="nav-link" href="#">Email</a>
              </li>
            </ul> -->

            <div class="d-block d-lg-none py-4">
              <!-- <a href="../main/index.html" class="text-nowrap logo-img"> -->
                <img src="./img/neko.png" class="dark-logo" alt="Logo-Dark" />
                <img src="./img/neko.png" class="light-logo" alt="Logo-light" />
              <!-- </a> -->
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="ti ti-dots fs-7"></i>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <a href="javascript:void(0)" class="nav-link nav-icon-hover-bg rounded-circle mx-0 ms-n1 d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                  <i class="ti ti-align-justified fs-7"></i>
                </a>
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item nav-icon-hover-bg rounded-circle">
                    <a class="nav-link moon dark-layout" href="javascript:void(0)">
                      <i class="ti ti-moon moon"></i>
                    </a>
                    <a class="nav-link sun light-layout" href="javascript:void(0)">
                      <i class="ti ti-sun sun"></i>
                    </a>
                  </li>

                  <!-- ------------------------------- -->
                  <!-- end shopping cart Dropdown -->
                  <!-- ------------------------------- -->


                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item dropdown">
                    <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                      <div class="d-flex align-items-center">
                        <div class="user-profile-img">
                          <img src="./assets/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="modernize-img" />
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                      <div class="profile-dropdown position-relative" data-simplebar>
                        <div class="py-3 px-7 pb-0">
                          <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                        </div>
                        <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                          <img src="./assets/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="modernize-img" />
                          <div class="ms-3">
                            <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                            <span class="mb-1 d-block">Designer</span>
                            <p class="mb-0 d-flex align-items-center gap-2">
                              <i class="ti ti-mail fs-4"></i> info@modernize.com
                            </p>
                          </div>
                        </div>

                        <div class="d-grid py-4 px-7 pt-8">
                          <a href="#" class="btn btn-outline-primary">Log Out</a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
          </nav>
          <!-- ---------------------------------- -->
          <!-- End Vertical Layout Header -->
          <!-- ---------------------------------- -->

        </div>
      </header>
      <!--  Header End -->


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
                      <button class="btn btn-lg btn-outline-primary col-lg-2" id="submitBtn" >Check</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- start Individual column searching (text inputs) -->
            <div class="card">
              <div class="card-body">

                <div class="table-responsive">
                  <table id="bootTable" class="table table-striped w-100 table-bordered display text-nowrap dataTable">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>ID</th>
                        <th>URL</th>
                        <th>URL_Index</th>
                        <th>Name_Index</th>
                        <th>Full_URL</th>
                        <th>Name</th>
                        <th>Full_Name</th>
                        <th>Create</th>
                        <th>Update</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                      <!-- start row -->
                      <tr>
                        <th>ID</th>
                        <th>URL</th>
                        <th>URL_Index</th>
                        <th>Name_Index</th>
                        <th>Full_URL</th>
                        <th>Name</th>
                        <th>Full_Name</th>
                        <th>Create</th>
                        <th>Update</th>
                      </tr>
                      <!-- end row -->
                    </tfoot>
                  </table>
                </div>

                <!-- end Individual column searching (text inputs) -->
              </div>
            </div>
          </div>
        </div>
        <script>
          function handleColorTheme(e) {
            document.documentElement.setAttribute("data-color-theme", e);
          }
        </script>
        <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <i class="icon ti ti-settings fs-7"></i>
        </button>

        <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
            <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
              Settings
            </h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body h-n80" data-simplebar>
            <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
                <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
              </label>

              <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
                <i class="icon ti ti-moon fs-7 me-2"></i>Dark
              </label>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
              </label>

              <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
              </label>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

            <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
              <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>

              <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center" onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                  <i class="ti ti-check text-white d-flex icon fs-5"></i>
                </div>
              </label>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <div>
                <input type="radio" class="btn-check" name="page-layout" id="vertical-layout" autocomplete="off" />
                <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                  <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
                </label>
              </div>
              <div>
                <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout" autocomplete="off" />
                <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                  <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
                </label>
              </div>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="boxed-layout">
                <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
              </label>

              <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="full-layout">
                <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
              </label>
            </div>

            <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <a href="javascript:void(0)" class="fullsidebar">
                <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off" />
                <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                  <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
                </label>
              </a>
              <div>
                <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off" />
                <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                  <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
                </label>
              </div>
            </div>

            <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

            <div class="d-flex flex-row gap-3 customizer-box" role="group">
              <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="card-with-border">
                <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
              </label>

              <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off" />
              <label class="btn p-9 btn-outline-primary" for="card-without-border">
                <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
              </label>
            </div>
          </div>
        </div>
      </div>




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
      <script src="./assets/js/datatable/datatable-api.init.js"></script>
</body>
<script src="./API/Send_API.js"></script>
<script>
  $(document).ready(function() {
    var table = $('#bootTable').DataTable({
      destroy: true,
      scrollX: true,
      "order": [
        [0, 'desc']
      ],

      ajax: {
        url: 'http://localhost:3000/table/listIndex',
        dataSrc: 'results',
        
        
      },
      columns: [{
        data: 'id'
        },
        {
          data: 'domain'
        },
        {
          data: 'index_url',
          render: function(data) {
            if (data === 'true') {
              return '<img src="./img/true.png" alt="true" width="30">';
            } else if (data === 'false') {
              return '<img src="./img/false.png" alt="false" width="30">';
            } else if (data === 'dnf') {
              return '<img src="./img/no-results.png" alt="dnf" width="30">';
            } else {
              return '<img src="./img/search.png" alt="กำลังหาข้อมูล" width="30">';
            }
          }
        },
        {
          data: 'index_name',
          render: function(data) {
            if (data === 'true') {
              return '<img src="./img/true.png" alt="true" width="30">';
            } else if (data === 'false') {
              return '<img src="./img/false.png" alt="false" width="30">';
            } else if (data === 'dnf') {
              return '<img src="./img/no-results.png" alt="dnf" width="30">';
            } else {
              return '<img src="./img/search.png" alt="กำลังหาข้อมูล" width="30">';
            }
          }
        },
        {
          data: 'full_index_url',
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
        }
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
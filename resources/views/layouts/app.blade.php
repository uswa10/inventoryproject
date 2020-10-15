<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Inventory Management Project</title>
  <link href={{ asset ("vendor/fontawesome-free/css/all.min.css" ) }}  rel="stylesheet" type="text/css">
  <link href={{ asset ("vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet" type="text/css">
  <link href= {{ asset ("css/ruang-admin.min.css") }} rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">

        <div class="sidebar-brand-text mx-3">Inventory Project</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">

          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">

          <span>Equipment</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="/pages/show">Equipment List</a>
            <a class="collapse-item" href="/pages/create">Add Equipment</a>

          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">

          <span>Supplier</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="/supplier/wow">Supplier List</a>
            <a class="collapse-item" href="/supplier/create">Add Supplier</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">

          <span>Employee</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="/employee/show">Employee List</a>
            <a class="collapse-item" href="/employee/add">Add Employee</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">

          <span>Purchase</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="/stock/purchase">Add Equipment Stock</a>

          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapseChart" aria-expanded="true"
          aria-controls="collapseChart">

          <span>Deploy</span>
        </a>
        <div id="collapseChart" class="collapse" aria-labelledby="headingChart" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="/deploy/dcreate">Deploy Equipment</a>

          </div>
        </div>
      </li>
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/" data-toggle="collapse" data-target="#collapseReport" aria-expanded="true"
          aria-controls="collapseReport">

          <span>Reports</span>
        </a>
        <div id="collapseReport" class="collapse" aria-labelledby="headingReport" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="/reports/reports">Purchase Report</a>
            <a class="collapse-item" href="/salereports/sale">Sale Report</a>
          </div>
        </div>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

              </a>

            </li>
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

              
              </a>
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">







            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        @include ('inc.messages')
        <main class="py-4">
           @yield('content')
       </main>



            <!-- Earnings (Annual) Card Example -->



            <!-- Area Chart -->

            <!-- Pie Chart -->

            <!-- Invoice Example -->


  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>

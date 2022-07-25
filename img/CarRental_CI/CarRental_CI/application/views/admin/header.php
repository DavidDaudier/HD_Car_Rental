<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rental</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url().'assets/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/sb-admin-2.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/'; ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/'; ?>vendor/sweetalert/sweetalert.css" rel="stylesheet">

    <script src="<?php echo base_url().'assets/'; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>js/sb-admin-2.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url().'assets/'; ?>vendor/sweetalert/sweetalert.min.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'admin'; ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-car-side"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Car Rental System</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'admin'; ?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Transaction
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/transaksi'; ?>">
          <i class="fas fa-fw fa-cog"></i>
          <span>Rentals</span>
        </a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Master
      </div>

      <!-- Nav Item - Car -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/mobil'; ?>">
          <i class="fas fa-fw fa-car"></i>
          <span>Car Section</span>
        </a>
      </li>

      <!-- Nav Item - Customer -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/kostumer'; ?>">
          <i class="fas fa-fw fa-users"></i>
          <span>Customer Section</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama'); ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url().'assets/img/admin-user.png'; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!--
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                -->
                <a class="dropdown-item" href="<?php echo base_url().'admin/ganti_password'; ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Change Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

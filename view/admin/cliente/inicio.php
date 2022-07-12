<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/cft/assets/img/favicon.png">
  <title>
  CFT Estatal del Maule
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="/cft/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/cft/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="/cft/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="/cft/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
<?php
session_start();
if(!isset($_SESSION['id_cliente'])){
    header("Location: /cft/login.php");
}
$nombre_cliente = $_SESSION['nombre_cliente'];
?>
  <aside class="bg-success sidenav navbar navbar-vertical navbar-expand-xs  my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="m-0" href="#" target="_blank">
        <img src="/cft/img/logo.png" class="img-fluid" alt="main_logo">
        <span class="ms-1 font-weight-bold"></span>
      </a>
    </div>
  

  </aside>
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
      <div class="container-fluid py-1">
        <nav aria-label="breadcrumb">
         
         
        </nav>
        <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          
          </div>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../../../logout.php" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Cerrar Sesión</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-success"></i>
                    <i class="sidenav-toggler-line bg-success"></i>
                    <i class="sidenav-toggler-line bg-success"></i>
                  </div>
                </a>
              </a>
            </li>
          
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
             
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                      </div>
                 
                    </div>
                  </a>
                </li>
          
              
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
              <?php echo $nombre_cliente; ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
             Bienvenido
              </p>
            </div>
          </div>
         
        </div>
      </div>
    </div>
  
  </div>

  
  <!--   Core JS Files   -->
  <script src="/cft/assets/js/core/popper.min.js"></script>
  <script src="/cft/assets/js/core/bootstrap.min.js"></script>
  <script src="/cft/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/cft/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/cft//assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
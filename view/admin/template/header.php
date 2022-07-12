<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CFT Estatal del Maule</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/cft/admin/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
	<?php
session_start();
if(!isset($_SESSION['id_admin'])){
    header("Location: /cft/login.php");
}
$nombre_admin = $_SESSION['nombre_admin'];


include_once '../../../model/conexion.php';
$sentencia = $bd->query('select * from ciudadanos');
$choferes = $sentencia->fetchAll(PDO::FETCH_OBJ);

$sentenciados = $bd->query('select * from planes');
$planes = $sentenciados->fetchAll(PDO::FETCH_OBJ);

$sentenciatres = $bd->query('select * from usuarios');
$usuarios = $sentenciatres->fetchAll(PDO::FETCH_OBJ);

$sentenciacuatro = $bd->query('SELECT e.nombre, e.apellidos, e.email, e.vistas, e2.nombre as plan FROM usuarios e
JOIN planes e2 ON e2.id_plan  = e.id_planes WHERE id_roles=2;');
$clientes = $sentenciacuatro->fetchAll(PDO::FETCH_OBJ);
//print_r($choferes);

/*
include_once()
La sentencia include_once() incluye y evalúa el fichero especificado durante la ejecución
 del script. Es un comportamiento similar al de la sentencia include(), siendo la única 
 diferencia que si el código del fichero ya ha sido incluido, no se volverá a incluir. 
 Como su nombre lo indica, será incluido sólo una vez. include_once() puede ser usado en casos 
 donde el mismo fichero podría ser incluido y evaluado más de una vez durante una ejecución 
 particular de un script, así que en este caso, puede ayudar a evitar problemas como la redefinición 
 de funciones, reasignación de valores de variables, etc.
*/
?>
        <nav class="sb-topnav  navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3 mb-3" href="/cft/index.php"><img src="/cft/img/logoadmin.png" class="img-fluid mt-5" width="80" height="80" alt="logo admin"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../../../logout.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>
			
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading mt-5"></div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              <?php echo $nombre_admin; ?>
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Administración
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    <i class="bi bi-people"> Usuarios </i>
 
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../../../view/admin/admin/crear.php"><i class="bi bi-person-plus"> Crear Administrador</i></a>
                                            <a class="nav-link" href=""><i class="bi bi-eye"> Ver Usuarios</i></a>
                                         
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    <i class="bi bi-bank2">  Ciudadanos</i>

                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="../../../view/admin/ciudadanos/index.php"><i class="bi bi-eye"> Ver Ciudadanos</i> </a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Clientes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="../../../view/admin/cliente/crear.php"><i class="bi bi-person-plus"> Crear Cliente</i></a>
                                    <a class="nav-link" href="../../../view/admin/admin/index.php"><i class="bi bi-person-check"> Ver Cliente</i></a>
                                </nav>
                            </div>
                           
                    </div>
                 
                </nav>
            </div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/cft/admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/cft/admin/assets/demo/chart-area-demo.js"></script>
        <script src="/cft/admin/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/cft/admin/js/datatables-simple-demo.js"></script>
    </body>
</html>

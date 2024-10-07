<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Purificadora Agua Del Roble</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<!--DATABLES-->
<link rel="stylesheet" type="text/css" href="vendor/datatables/datatables.min.css"/>
<!--datables estilo con bootstrap-->
<link rel="stylesheet" type="text/css" href="vendor/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary2 sidebar sidebar-dark accordion bg-dark bg-gradient" id="accordionSidebar">
    <br>
    <div class="logoinicio">
    <!-- Sidebar - Brand -->
    <a href="mensual.php" class="sidebar-brand d-flex align-items-center justify-content-center">
       <!--<div class="sidebar-brand-icon rotate-n-15">-->
            <!--<i class="fas fa-laugh-wink"></i>-->
            <!--<img src="img/Logo Agua.jpeg" alt="" width="60%" height="25%">-->
       <!-- </div>-->
     
        <div class="sidebar-brand-text mx-3">
           
        <p>Agua Del Roble</p>
        </div> 
    </a>
</div>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">


       <!-- Nav Item - Dashboard -->
      

    <!-- Divider -->
    <hr class="sidebar-divider">

    

            <!-- Nav Item - Charts -->
         

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="productos.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Productos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pedidos.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pedidos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="detalle_pedido.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Detalles Del Pedido</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="departamento.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Departamentos</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="instituciones.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Instituciones</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="mensual.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Reporte</span></a>
            </li>

            

           


            
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


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

                    <!-- Topbar Search 
                
                BUSCADOR
        
                 <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                
                -->
                    
                    
   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts 
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!- Counter - Alerts -->
                                
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">El Roble</span> 
                                          
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                               
                               
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

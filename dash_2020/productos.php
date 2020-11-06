<!DOCTYPE html>
<html lang="en">
  
<head>
<link rel="shortcut icon" type="image/x-icon" href="../img/unnamed.ico" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dayloplast admin</title>

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/bb7af51ed8.js" crossorigin="anonymous"></script>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script src="js/sesion.js"></script>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body id="page-top">

  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon">
          <img src="img/unnamed.svg" alt="logo" height="50px" width="90px">
        </div>
        <div class="sidebar-brand-text mx-3">Dayloplas</div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Inicio</span></a>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="curso.php">
          <i class="fas fa-users"></i> 
          <span>Curso</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="proveedor.php">
          <i class="fas fa-user-tie"></i> 
          <span>Proveedor</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="marcas.php">
          <i class="fas fa-globe"></i>
          <span>Marcas</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="productos.php">
          <i class="fas fa-shopping-bag"></i>  
          <span>Productos</span>
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="usuario.php">
            <i class="fas fa-user"></i> 
            <span>Usuarios</span>
          </a>
        </li>

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">

      <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarsExample09">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <button class="btn btn-light btn-icon-split btn-sm" id="sidebarToggle">
                    <span class="icon text-gray-600">
                      <i class="fas fa-arrow-left">
                      </i>
                    </span>
                    <span class="text">Minimizar barra lateral</span>
                  </button>
                </li>
              </ul>
              <ul class="navbar-nav my-2 my-md-0">
                <li class="nav-item">
                  <a class="btn btn-primary btn-icon-split btn-sm" id="sidebarToggle" href="../index.php">
                    <span class="icon text-gray-600">
                      <i class="fas fa-check">
                      </i>
                    </span>
                    <span class="text" >Ir al inicio</span>
                  </a>
                </li>
              </ul>
              <?php 
              if(!isset($_SESSION['dni'])):
                header("location: ../index.php");
              elseif($_SESSION['tipo'] == "admin"):
              ?>
              <ul class="navbar-nav my-2 my-md-0">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">bienvenido, <?=$_SESSION['nombre']?></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown09">
                  <a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesion</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#user" >Perfil</a>
                </div>
              </ul>
              <?php
              elseif($_SESSION['tipo'] == "matriculado" or $_SESSION['tipo'] == "basico"):
                header("location: ../index.php");
              endif;
              ?>
            </div>
          </nav>
  <div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
              <div class="col-sm-4 bg-c-lite-green user-profile">
                <div class="card-block text-center text-white">
                  <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                  <p class="f-w-600"><?=$_SESSION['nombre']?></p>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="card-block">
                  <p class="m-b-20 p-b-5 b-b-default f-w-600">Datos</p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">DNI</p>
                      <p class="text-muted f-w-400" name="dni"><?=$_SESSION['dni']?></p>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Telefono</p>
                      <p class="text-muted f-w-400"><?=$_SESSION['tel']?></p>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <div class="container-fluid">

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Cargar nuevo producto</h1>
            </div>

            <div class="card shadow mb-4">
              <a href="#cargar" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="cargar">
                <h6 class="m-0 font-weight-bold text-primary">Cargar proveedor</h6>
              </a>
            <div class="collapse show" id="cargar">
            <!--<button class="btn btn-success my-2 my-md-0" id="nuevo">+</button>-->
              <form method="POST" enctype="multipart/form-data" action="cargar_producto.php" class="card-body form-group">
                <label for="nombre">Nombre del porducto</label>
                <input type="text" name="nombre" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <label for="especie">A que especie pertenece</label>
                <input type="text" name="especie" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <label for="marca">Marca</label>
                <select name="marca" name="marca" id="marca" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12"></select>
                <label for="provedor">proveedor que lo provee</label>
                <select name="provedor" name="provedor" id="provedor" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12"></select>
                <label for="stock">Stock del mismo actualmente</label>
                <input type="text" name="stock" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <label for="precio">Precio del producto</label>
                <input type="text" name="precio" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <label for="desc">descripcion del producto</label>
                <input type="text" name="desc" class="form-control col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <br>
                <div class="custom-file">
                  <input type="file" name="img" class="custom-file-input" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03">
                  <label class="custom-file-label" for="inputGroupFile03">imagen del producto</label>
                </div>
                <br>
                <br>
                <button class="btn btn-primary" id="loadprodu">Cargar</button>
              </form>
            </div>
          </div>
          <div class="card shadow mb-4">
              <a href="#eliminarproducto" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Eliminar productos</h6>
              </a>
            <div class="collapse show" id="eliminarproducto">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="Tablaeli" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Proveedor</th>
                        <th>Imagen del producto</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tbody id="elimi">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
            <div class="card shadow mb-4">
              <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">Productos</h6>
              </a>
            <div class="collapse show" id="collapseCardExample">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Especie</th>
                        <th>Marca</th>
                        <th>Stock</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                        <th>Proveedor</th>
                        <th>Imagen del producto</th>
                      </tr>
                    </thead>
                    <tbody id="resu">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>


      </div>

    </div>
    

  </div>
   <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


           
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="js/sb-admin-2.min.js"></script>

  <script src="vendor/chart.js/Chart.min.js"></script>

  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="load.js"></script>         
</body>

</html>

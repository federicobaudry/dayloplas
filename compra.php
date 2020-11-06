<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="img/unnamed.ico" />
    
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    
    <title>Dayloplas</title>
    
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a href="index.php"><img src="img/unnamed.png" alt="logo" height="15%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="tienda.php">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cursos.php">Cursos</a>
                    </li>
                </ul>
                <?php 
                if(!isset($_SESSION['dni'])):
                ?>
                <form class="form-inline my-2 my-md-0">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#iniciarsesion" >Iniciar sesion</button>
                </form>
                <?php
                elseif($_SESSION['tipo']=="admin"):
                ?>
                <ul class="navbar-nav my-2 my-md-0">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenido, <?=$_SESSION['nombre']?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesion</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#user" >Perfil</a>
                        <a class="dropdown-item" href="dash_2020/admin.php">Administrar</a>
                    </div>
                </ul>
                <?php
                else:
                ?>
                <ul class="navbar-nav my-2 my-md-0">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenido, <?=$_SESSION['nombre']?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown09">
                        <a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesion</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#user" >Perfil</a>
                    </div>
                </ul>
                <?php 
                endif;
                ?>
            </div>
        </nav>
    </header>
    
    <br>
    
    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-3">Realizar Compra</h2>
                    <form id="procesar-pago" action="#" method="POST">
                        <div class="form-group row">
                            <label for="cliente" class="col-12 col-md-2 col-form-label h2">Cliente :</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="cliente"
                                placeholder="Ingresa nombre cliente" name="destinatario">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-12 col-md-2 col-form-label h2">Correo :</label>
                            <div class="col-12 col-md-10">
                                <input type="text" class="form-control" id="correo" placeholder="Ingresa tu correo" name="cc_to">
                            </div>
                        </div>
                        
                        <div id="carrito" class="form-group table-responsive" >
                            <table class="table" id="lista-compra" >
                                <thead>
                                    <tr>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Precio</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Sub Total</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                    
                                </thead>
                                <tbody >
                                    
                                </tbody>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">SUB TOTAL :</th>
                                    <th scope="col">
                                        <p id="subtotal"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">IVA :</th>
                                    <th scope="col">
                                        <p id="igv"></p>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                <tr>
                                    <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                                    <th scope="col">
                                        <input id="total" name="monto" class="font-weight-bold border-0" readonly style="background-color: white;"></input>
                                    </th>
                                    <!-- <th scope="col"></th> -->
                                </tr>
                                
                            </table>
                        </div>
                        
                        <div class="row justify-content-center" id="loaders">
                            <img id="cargando" src="img/cargando.gif" width="220">
                        </div>
                        
                        <div class="row justify-content-between">
                            <div class="col-md-4 mb-2">
                                <a href="tienda.php" class="btn btn-info btn-block">Seguir comprando</a>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <button href="#" class="btn btn-success btn-block" id="procesar-compra">Realizar compra</button>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
                
                
            </div>
            
        </div>
    </main>
    <div class="modal fade" id="iniciarsesion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form >
                <div class="form-group">
                  <label for="dni" class="col-12">DNI: </label>
                  <input type="text" class="form-control col-12" id="dniini">
                </div>
                <div class="form-group">
                  <label for="contra" class="col-12">Contraseña:</label>
                  <input type="password" class="form-control col-12" id="contraini">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarse">Registrarse</button>
              <button type="button" class="btn btn-secondary" onclick="iniciarsesion()" data-dismiss="modal">Iniciar Sesion</button>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="modal fade" id="registrarse" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Registrarse</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form >
                <div class="form-group">
                  <label for="dni" class="col-form-label">DNI: </label>
                  <input type="text" class="form-control" id="dnireg">
                </div>
                <div class="form-group">
                  <label for="nomyape" class="col-form-label">Nombre y Apellido: </label>
                  <input type="text" class="form-control" id="nomyape">
                </div>
                <div class="form-group">
                  <label for="tel" class="col-form-label">Telefono: </label>
                  <input type="text" class="form-control" id="tel">
                </div>
                <div class="form-group">
                  <label for="contra" class="col-form-label">Contraseña: </label>
                  <input type="text" class="form-control" id="contrareg">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" onclick="register()" data-dismiss="modal">Registrarse</button>
            </div>
          </div>
        </div>
      </div>
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
                      <p class="text-muted f-w-400" id="dniperfil"><?=$_SESSION['dni']?></p>
                    </div>
                    <div class="col-sm-6">
                      <p class="m-b-10 f-w-600">Telefono</p>
                      <p class="text-muted f-w-400"><?=$_SESSION['tel']?></p>
                    </div>
                  </div>
                  <?php
                  if($_SESSION['tipo'] == "basico"):
                  ?>
                  <div class="row">
                    <div class="form-group">
                      <label for="matricula">ingrese su matricula para ser matriculado</label>
                      <input type="text" class="form-control" id="matricula">
                    </div>
                    <button class="btn btn-outline-primary" id="cargarmatri">cargar matricula</button>
                  <?php
                  else:
                  ?>
                  <div class="row">
                    <p class="m-b-20 p-b-5 b-b-default f-w-600">ya tienes una matricula cargada</p>
                  </div>
                  <?php
                  endif;
                  ?>
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

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/sweetalert2.min.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>

<script src="js/carrito.js"></script>
<script src="js/compra.js"></script>
<script src="cons.js"></script>
<link rel="stylesheet" href="css/style.css">


</body>

</html>
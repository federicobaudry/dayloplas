<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="img/unnamed.ico" />
  <?php
  include("conex.html");
  ?>
  
  <title>Dayloplas</title>
  <script src="js/sesion.js"></script>
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
    
    
    <main>
      <div class="container" id="lista-cursos">
        
      </div>
      
    </main>
    
    
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <img src="img/unnamed.svg" width="70" height="70"></img>
          <small class="d-block mb-3 text-muted">&copy; 2020</small>
        </div>
        <div class="col-6 col-md">
          <h5>Sobre Nosotros</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="sobre-nosotros.php">Sobre Nosotros</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Marcas que trabajamos</h5>
          <ul class="list-unstyled text-small" id="marcas">
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>cursos</h5>
          <ul class="list-unstyled text-small" id="cursos">
          </ul>
        </div>
      </div>
    </footer>
    
    
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
    
  </body>
  <script>
    $(document).ready(function(){
      $("#lista-cursos").load("cargarcursos.php");
    });
  </script>
  <script type="text/javascript" src="cons.js"></script>
  </html>
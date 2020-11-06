<!DOCTYPE html>
<html lang="es">
<head>
<link rel="shortcut icon" type="image/x-icon" href="img/unnamed.ico" />
  
    <?php
        include("conex.html")
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
</head>
<body>
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
                  <a class="dropdown-item" data-toggle="modal" data-target="#user">Perfil</a>
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
                  <a class="dropdown-item" data-toggle="modal" data-target="#user">Perfil</a>
                </div>
              </ul>
            <?php 
              endif;
            ?>
        </div>
    </nav>
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
    
    
    
    
    
  <div class="container"> 
    <div class="row">
      <div class="col-4">
        <div class="list-group" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Historia</a>
          <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Donde nos encontramos?</a>
          <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Contacto</a>
        </div>
      </div>
      <div class="col-8">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <img src="img/q_head.jpg" class="img-fluid" alt="header" width="100%">
            <p>En el atardecer del viernes 6 de septiembre de 1957 surge en el mercado de la belleza y de la salud argentina un original y novedoso emprendimiento. Nuestro fundador, el Doctor Carlos Alberto Quaglia, se encontraba frente a un grupo de colegas y profesionales de la estética en un evento promocional de su innovadora línea de productos. En aquella ocasión, la forma de transmitir sus conocimientos y la utilización de los productos sentaron las bases de lo que luego se transformaría en su primer Curso de Pedicuría. </p>
            <p>Los sólidos pilares que brindarían proyección a nuestra empresa ya se habían sembrado. El ámbito de los profesionales de la belleza, la salud y la estética se mostraba ávido de propuestas innovadoras y en este marco la recepción de la original línea de productos del Doctor Quaglia fue rápidamente acogida con excelentes resultados: todos los profesionales incorporaban los principales lineamientos de tratamiento en sus respectivos ámbitos de trabajo. </p>
            <p>La calidad de excelencia, el óptimo rendimiento y la eficacia característica de los productos exigieron la realización de nuevas jornadas de capacitación que multiplicaron la demanda de servicios. A partir de esta nueva experiencia se crea el Instituto de Enseñanza más importante del país que revoluciona el mercado de la cosmética argentina; a la vez que el ambicioso proyecto del Doctor Quaglia ganaba un nombre protagónico: daylo plas (excelsa belleza y vida). </p>
            <p>Este año cumplimos 62 años de una impecable labor ininterrumpida marcada por una brillante trayectoria: hemos formado más de 600.000 profesionales con un inmejorable nivel de excelencia en todas las disciplinas relacionadas con la belleza y el cuidado corporal. Para daylo plas es fundamental inculcar a todos los cursantes un sentido ético y humanístico que les permite distinguirse notablemente en el desempeño de su oficio. </p>
            <p>Nuestra empresa ha transitado sin pausa un exitoso camino de logros sostenidos a lo largo del tiempo que consiguió revolucionar el campo de la ciencia cosmética profesional argentina. Actualmente, en daylo plas trabajamos de forma inteligente y efectiva para conducir y orientar, de acuerdo a las necesidades vigentes, el exitoso rumbo empresarial. </p>
            <p>“Estamos orgullosos de poner a su disposición nuestro modelo empresarial para darles la bienvenida a nuestra creciente y querida organización”.</p>
          </div>
          <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3205.1950106702125!2d-56.704265048543206!3d-36.54940837042877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959c12fb605866a3%3A0xb72b202c9ca6ca8d!2sCalle%2047%20816%2C%20Santa%20Teresita%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1603135117211!5m2!1ses-419!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
          <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            <h5>
              nombre:
            </h5>
            <br>
            <h5>
              tel:
            </h5>
            <br>
            <h5>
              mail:
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div> 
  
  
  <footer class="container py-5">
        <div class="row">
          <div class="col-12 col-md">
            <img src="img/unnamed.svg" width="70" height="70"></img>
            <small class="d-block mb-3 text-muted">&copy; 2020</small>
          </div>
          <div class="col-6 col-md">
            <h5>Sobre Nosotros</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="sobre-nosotros.php">sobre nosotros</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Marcas que trabajamos</h5>
            <ul class="list-unstyled text-small"id="marcas">
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>cursos</h5>
            <ul class="list-unstyled text-small" id="cursos">
            </ul>
          </div>
        </div>
      </footer>
    <script type="text/javascript" src="cons.js"></script>
</body>
</html>
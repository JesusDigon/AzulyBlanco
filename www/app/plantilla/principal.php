
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Azul y Blanco</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" type="image/png" href="iconos/favicon-96x96.png" sizes="96x96">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='css/1.css'>
    <script src='main.js'></script>
    <script src='web/js/funciones.js'></script>

</head>
<body>
    <!-- Contenedor Principal -->
  <main class="container-fluid">

    <!-- Barra de navegación -->
    <header class="row justify-content-center">
      <nav class="navbar navbar-expand-md navbar-light bg-primary">
        
        <img src="Imagenes/logo.jpeg" class="mr-3" width="100" height="60" alt="cafeteriaAzulyBlanco" >
        <a class="navbar-brand ml-1 mr-3" href="#">Azul y Blanco</a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse " id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php?orden=Inicio">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="index.php?orden=Carta">Carta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Haz tu pedido online</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?orden=Contacto">Contacta con nosotros</a>
              </li>
          </ul>
        </div>
      </nav>
    </header>

    <div id="contenido">
<?= $contenido ?>

</div>

          <!-- Pie de página -->
          <footer class="row footer  mt-5 p-2 ">
        <p class="text-center text-white small col-md-5 mt-3">Diseño del sitio © 2020 Jesús Digón. Iconos cedidos por
          iconos.iconos.com. Siguenos en nuestras RRSS: </p>
        <div class="col-md-5 text-center">
          <a href="http://www.twitter.com" target="_blank"><img class=" rrss embed-responsive-item"
              src="iconos/social_Twitter_2755.png"></a>
          <a href="http://www.instagram.com" target="_blank"><img class=" rrss embed-responsive-item"
              src="iconos/instagram_f_icon-icons.com_65485.svg"></a>
            <a href="http://www.facebook.com" target="_blank"><img class=" rrss embed-responsive-item"
            src="iconos/facebook.png"></a>
        </div>
        <div class="col-md-1   text-center mt-3">
          <img class="embed-responsive-item" src="iconos/by-nc-nd.eu.svg">
          <a class="nav-link" href="index.php?orden=Admin">Iniciar sesión</a>
        </div>
      </footer>
      </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
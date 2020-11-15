<?php ob_start();?> <!--Guardo la salida en un buffer-->

    <!-- Cabeceras Secundarias -->
    <div class="row mb-5"></div>
    <header class="row  justify-content-center mb-3 align-items-center" style="height: 20vh;">
      <h2 class="text-capitalize text-white">NUESTRA CARTA</h2>
    </header>
    <div class="container ">
    <div class="row justify-content-around">

        <div class="col-sm-4 mt-5 ml-auto">
            <div class="text-center" >
                <img class="" style="height: 13rem;" src="Imagenes/cura_plancha.jpeg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Desayunos</h5>
                <p class="card-text">Consulta aquí nuestra completa selección de desayunos.</p>
                <a href="index.php?orden=Desayunos" class="btn btn-primary">Vamos allá</a>
            </div>
        </div>
      </div>

      <div class="col-sm-4 mt-5">
        <div class="card text-center" >
            <img class="card-img-top" style="height: 13rem;" src="Imagenes/sandwiches.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Sándwich</h5>
            <p class="card-text">Echalé un vistazo a nuestra oferta de sándwich.</p>
            <a href="index.php?orden=Sandwich" class="btn btn-primary">Vamos allá</a>
            </div>
        </div>
      </div>

      <div class="col-sm-4 mt-5">
        <div class="card text-center " >
            <img class="card-img-top" style="height: 13rem;" src="Imagenes/empenadas.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Empanadas</h5>
            <p class="card-text">Echalé un vistazo a nuestras deliciosas empanadas.</p>
            <a href="index.php?orden=Empanadas" class="btn btn-primary">Vamos allá</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4 mt-5">
        <div class="card text-center " >
            <img class="card-img-top" style="height: 13rem;" src="Imagenes/croissants_rellenos.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Croissants</h5>
            <p class="card-text">Echalé un vistazo a nuestras deliciosos croissants.</p>
            <a href="index.php?orden=Croissants" class="btn btn-primary">Vamos allá</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4 mt-5">
        <div class="card text-center ">
            <img class="card-img-top" style="height: 13rem;" src="Imagenes/Atún.png" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Bocadillos</h5>
            <p class="card-text">Echalé un vistazo a nuestra gama de bocadillos.</p>
            <a href="index.php?orden=Bocadillos" class="btn btn-primary">Vamos allá</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4 mt-5">
        <div class="card text-center " >
            <img class="card-img-top" style="height: 13rem;" src="Imagenes/bollería.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Dulces</h5>
            <p class="card-text">Echalé un vistazo a nuestros deliciosos dulces.</p>
            <a href="index.php?orden=Dulces" class="btn btn-primary">Vamos allá</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4 mt-5">
        <div class="card text-center ">
            <img class="card-img-top" style="height: 13rem;" src="Imagenes/empanadas.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Panes</h5>
            <p class="card-text">Echalé un vistazo a nuestras amplia variedad de panes.</p>
            <a href="index.php?orden=Panes" class="btn btn-primary">Vamos allá</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4 mt-5">
        <div class="card text-center ">
            <img class="card-img-top" style="height: 13rem;" src="Imagenes/tarta2.jpeg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Sin Gluten</h5>
            <p class="card-text">Tenemos una selección de productos sin gluten para tí.</p>
            <a href="index.php?orden=Sin Gluten" class="btn btn-primary">Ver</a>
            </div>
        </div>
        </div>

        <div class="col-sm-4 mt-5">
          <div class="card text-center " >
              <img class="card-img-top" style="height: 13rem;" src="Imagenes/ensaladas.jpeg" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">Ensaldas</h5>
              <p class="card-text">Echalé un vistazo a nuestras deliciosas ensaladas.</p>
              <a href="index.php?orden=Ensaladas" class="btn btn-primary">Vamos allá</a>
              </div>
          </div>
      </div>

      <div class="col-sm-4 mt-5">
        <div class="card text-center " >
            <img class="card-img-top" style="height: 13rem;" src="Imagenes/bebidas.jpg" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Bebidas</h5>
            <p class="card-text">Echalé un vistazo a nuestras bebidas.</p>
            <a href="index.php?orden=Bebidas" class="btn btn-primary">Vamos allá</a>
            </div>
        </div>
    </div>

    </div>
    </div>


    <?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "principal.php";
?>

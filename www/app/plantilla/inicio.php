<?php ob_start();?>
<!--Guardo la salida en un buffer-->

<?php 
$fotos = [
  "Primer" => "desayuno_completo.jpeg", 
  "Segundo" =>"desayuno_tostada_tomate_jamon.jpeg", 
  "Tercer" => "portada1.jpeg",
  "Cuarto" =>  "portada2.jpeg"
];

?>

<!-- Carousel -->
<section class="row justify-content-center mt-5">
  <div class="col-sm-8 pr-0 pl-0 ">
    <div class="carousel slide" id="carrusel" data-ride="carousel">
      <div class="carousel-inner">
        <?php foreach($fotos as $clave => $foto):?>
        <div class="carousel-item  <?=$clave=="Primer" ? "active" : ""?>">
          <img class="w-100 imgCarousel " src="Imagenes/<?=$foto?>"  alt="<?=$clave?> elemento">
        </div>
        <?php endforeach;?>
      </div>
      <a class="carousel-control-prev" href="#carrusel" data-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carrusel" data-slide="next">
        <span class="carousel-control-next-icon "></span>
        <span class="sr-only">Posterior</span>
      </a>

    </div>
  </div>
</section>

<!-- Cabeceras Secundarias -->
<div class="row  mb-5 justify-content-around "></div>
<header class="row  justify-content-center  mb-3 align-items-center" style="height: 20vh;">
  <h2 class="text-capitalize text-primary">QUIENES SOMOS</h2>
</header>

<div class="row justify-content-center">
  <p class="col-sm-8">Somos especialistas en dar los mejores desayunos y meriendas, desde 1989, en el barrio de Tetúan,
    ahora estrenamos nuevo local, en la calle Bravo Murillo, donde podrás disfrutar de tu desayuno,
    del mejor fútbol, de nuestros deliciosos aperitivos, o incluso podrás comprar el pan, siempre
    con la mejor atención y el mejor ambiente.</p>
</div>
<header class="row  justify-content-center  mb-3 align-items-center" style="height: 20vh;">
  <h2 class="text-capitalize text-primary">GALERÍA</h2>
</header>
<div class="row justify-content-center">
  <dic class="row col-sm-8 justify-content-center"> 
    <?php foreach ($desayunos as $desayuno):?>
      <div class="row col-sm-4 col-6">
        <img class="rounded w-100 p-2 p-sm-4" src="Imagenes/<?=$desayuno->Nombre?>.png"/>
      </div>
    <?php endforeach;?>
  </div>
</div>

<!-- Cabeceras Secundarias -->
<div class="row mt-5 mb-5"></div>
<header class="row  justify-content-center mt-5 mb-3">
  <h2 class="text-capitalize text-primary">CONTACTO</h2>
</header>

<!-- Google maps -->
<section class="row  justify-content-around">
  <div class="col-sm-8 embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d379.46590789671467!2d-3.7002945987821954!3d40.45917309643888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422906d725b573%3A0x7ab598a25d93e52!2sCalle%20de%20Bravo%20Murillo%2C%20255%2C%2028020%20Madrid!5e0!3m2!1ses!2ses!4v1595961859037!5m2!1ses!2ses"
      width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
</section>

<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "principal.php";
?>

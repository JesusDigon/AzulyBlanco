<?php
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();

?>
<div class="row  mb-5 "></div>
    <header class="row bg-dark justify-content-center  mb-3 align-items-center" style="height: 20vh;">
      <h1 class="text-capitalize text-white">Modo administrador</h1>
    </header>
<div class="row justify-content-around" style="height:60vh;">
    <a name="Ver" id="" class="btn btn-primary col-sm-4" style="height:10vh;" href="index.php?orden=VerAdmin" role="button">Ver productos</a>
    <a name="Ver" id="" class="btn btn-primary col-sm-4" style="height:10vh;" href="index.php?orden=Nuevo" role="button">Introducir productos</a>
</div>


<?php 
// Vacio el bufer y lo copio a contenido
// Para que se mue p div de contenido de la página principal

$contenido = ob_get_clean();
include_once "principal.php";

?>
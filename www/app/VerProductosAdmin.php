<?php
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();

?>

<div class="row  mb-5 "></div>
    <header class="row bg-dark justify-content-center  mb-3 align-items-center" style="height: 20vh;">
      <h1 class="text-capitalize text-white">Modo administrador</h1>
    </header>

    <div class="container ">
    <div class="row justify-content-around">
<?php foreach ( $productos as $producto ):?>
        <div class="col-sm-4 mt-5 ml-auto">
            <div class="card text-center bg-dark" >
                <img class="card-img-top" src="Imagenes/<?=$producto->Nombre?>.png" alt="Card image cap"/>
                <div class="card-body">
                <h5 class="card-title"><?=$producto->Nombre?></h5>
                <p class="card-text"><?=$producto->Descripcion?></p>
                <p>Precio: <?=$producto->precio?></p>
                <a href="#" onclick="confirmarEditar('<?=$producto->Nombre?>','<?=$producto->id?>')" class="btn btn-primary">Editar</a>
                <a href="#" onclick="confirmarBorrar('<?=$producto->Nombre?>','<?=$producto->id?>')" class="btn btn-primary">Borrar</a>
            </div>
        </div>
        </div>
<?php endforeach; ?>

      </div>

      <div class="row justify-content-around" style="height:60vh;">
    <a name="Ver" id="" class="btn btn-primary col-sm-4" style="height:10vh;" href="index.php?orden=Admin" role="button">Atrás</a>
    
</div>

<?php 
// Vacio el bufer y lo copio a contenido
// Para que se mue p div de contenido de la página principal

$contenido = ob_get_clean();
include_once "principal.php";

?>
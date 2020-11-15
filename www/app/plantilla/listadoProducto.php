<?php
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();

if(sizeof($productos)>0){
?>

<div class="row  mb-5 "></div>
    <header class="row bg-dark justify-content-around  mb-3 align-items-center" style="height: 20vh;">
      <h1 class="text-capitalize text-white"><?=$productos[0]->tipo?></h1>
    </header>

    <div class="container ">
    <div class="row justify-content-around">
<?php
foreach ( $productos as $producto ){?>
        <div class="col-sm-4 mt-5 ml-auto">
            <div class="card text-center " >
                <img class="card-img-top" style="height: 13rem;" src="Imagenes/<?=$producto->Nombre?>.png" alt="Card image cap">
                <div class="card-body align-items-center" style="height: 15rem;">
                <h5 class="card-title"><?=$producto->Nombre?></h5>
                <p class="card-text align-self-center"><?=$producto->Descripcion?></p>
                <p class="card-text"> Precio: <?=$producto->precio?> €</p>
            </div>
        </div>
        </div>
<?php }
}else{
    ?>
<div class="row  mb-5 "></div>
    <header class="row bg-dark justify-content-around  mb-3 align-items-center" style="height: 20vh;">
      <h1 class="text-capitalize text-white">Aún no tenemos artículos en esta categoría</h1>
    </header>
    <div class="container ">
    <div class="row justify-content-around">
    <p>Estamos trabajando en ello y en breve podrás ver todos los artículos.
    Disculpa las molestias</p>

    <?php
}
    ?>

      </div>

      <div class="row justify-content-around mt-5" style="height:60vh;">
    <a name="Ver" id="" class="btn btn-primary col-sm-4" style="height:10vh;" href="index.php?orden=Carta" role="button">Atrás</a>

</div>

<?php
// Vacio el bufer y lo copio a contenido
// Para que se mue p div de contenido de la página principal

$contenido = ob_get_clean();
include_once "principal.php";

?>

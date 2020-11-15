<?php ob_start();?> <!--Guardo la salida en un buffer-->
<?php 
$cabecera = '';
?>
    <!-- Cabeceras Secundarias -->
    <div class="row mb-5"></div>
        <header class="row justify-content-center mb-3 align-items-center" style="height: 20vh;">
            <h1 class="text-capitalize">NUESTRA CARTA</h1>
        </header>
        <div class="container ">
            <div class="row justify-content-around">
                <?php foreach($productos as $producto):?>
                    <?php if($cabecera !== $producto->tipo):?>
                        <div class="row m-5 col-12 justify-content-center">
                            <h3 class="text-center"><?=$producto->tipo?></h3>
                        </div>
                        <?php $cabecera = $producto->tipo?>
                        
                    <?php endif;?>
                    <div class="row col-sm-4 justify-content-center">
                        <img class="rounded fluid-img w-100 prod-img" src="Imagenes/<?=$producto->Nombre?>.png"/>
                        <div class="justify-content-center">
                            <p class="text-center"><b><?=$producto->Nombre?></b> </p>
                            <p class="text-center"><?=$producto->Descripcion?> </p>
                            <p class="text-center"><?=$producto->precio?> € </p>
                        </div>
                    </div>
                <?php endforeach;?>
                <p>*Precios con iva incluido.Suplemento del 10% en terraza.</p>
            </div>
        </div>
    </div>




<?php
$contenido = ob_get_clean();// Vacio el bufer
include_once "principal.php";
?>
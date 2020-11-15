<?php
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();

?>

<?php 
$auto = $_SERVER['PHP_SELF'];
$productos = modeloProductosGetAll();
foreach ($productos as $product):
    if($product->id == $_GET['id']):
        $producto = $product;
    break;
    endif;
endforeach;
?>

<div class="container mt-5">
<div class="row"></div>
<h2 class="mt-5">Editar producto</h2>
  <?php if(isset($msg)){
	  echo $msg;
  }?>
  <form action="index.php?orden=Editar" enctype="multipart/form-data" method="POST" class="needs-validation mt-5" novalidate>

  <div class="row">
		<div class="col">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" class="form-control" id="nombre" placeholder="Introduzca un nombre" name="nombre" required
					value="<?=isset($producto->Nombre)?$producto->Nombre :""?>">
                <input type="hidden" name="id" value="<?=$producto->id?>"> 
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-tooltip">Por favor, introduzca un nombre</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="precio">Precio:</label>
				<input type="text" class="form-control" id="precio" name="precio" required
					value="<?=isset($producto->precio)? $producto->precio:""?>">
				<div class="valid-feedback">Valid.</div>
				<div class="invalid-tooltip">Por favor, introduzca un precio</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="descripcion">Descripcion:</label>
				<input type="text" class="form-control" id="descripcion" name="descripcion"
					value="<?=isset($producto->descripcion)? $producto->descripcion : ""?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<div class="form-group">
			<label for="tipo">Tipo:</label>
			<select name="tipo" class="form-control">
    			<option value="Desayuno">Desayunos</option>
    			<option value="Croissant">Croissants</option>
    			<option value="Panes">Panes</option>
                <option value="Dulces">Dulces</option>
                <option value="Empanadas">Empanadas</option>
    			<option value="Sin Gluten">Sin Gluten</option>
    			<option value="Bocadillos">Bocadillos</option>
                <option value="Ensaladas">Ensaladas</option>
    			<option value="Bebidas">Bebidas</option>
    			<option value="Sándwich">Sándwich</option></select>
			</div>
		</div>
</div>

<div class="row">
      <div class="col-8">
        <div class="custom-file">
        <label class="custom-file-label" for="subirImagen">Elija la imagen</label>
          <input name="imagen" class="custom-file-input" type="file" id="subirArchivo" value="Examinar" required>
          <div class="invalid-tooltip mt-0">a</div>
        </div>
      </div>
    </div>


    <div class="row">
	<div class="col">
		<button type="submit" class="btn btn-primary" name="orden" id="alta" value="Editar">Añadir</button>
	</div>
	<div class="col">
		<button type="button" name="atras" class="btn btn-success" onclick="window.location.href='index.php?orden=VerAdmin'" id="atras" value="atras">Atrás</button>
		</div>
	</div>
  </form>
</div>


<?php
// Vacio el bufer y lo copio a contenido
// Para que se mue p div de contenido de la página principal

$contenido = ob_get_clean();
include_once "principal.php";

?>

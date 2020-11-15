<?php
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();

?>


<div class="row  mb-5 "></div>
    <header class="row bg-dark justify-content-center  mb-3 align-items-center" style="height: 20vh;">
      <h1 class="text-capitalize text-white">Bienvenido al modo administrador</h1>
    </header>

    <div class="container">
  <h2>Formulario de acceso</h2>
  
  <form name='ACCESO' method="POST" action="index.php?orden=Admin" class="needs-validation" novalidate>
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="user">Usuario:</label>
				<input type="text" class="form-control" id="user" name="user" required>
				<div class="valid-feedback">OK</div>
				<div class="invalid-tooltip" data-placement="right">Por favor, introduzca nombre de usuario</div>
			</div>
			</div>
			</div>
			
			
			
	<div class="row">
		<div class="col">
			<div class="form-group">
				<label for="clave">Contraseña:</label>
				<input type="password" class="form-control" id="clave" name="clave" required>
				<div class="valid-feedback">OK</div>
				<div class="invalid-tooltip">Por favor, introduzca la contraeña</div>
			</div>
			</div>
			</div>
			
			
	<div class="row">
		<div class="col">
			<div class="form-group">
			<button name="orden" class="btn btn-primary" value="Entrar">Entrar</button>
			</div>
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
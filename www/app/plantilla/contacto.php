<?php
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();
?>

    <!-- Cabeceras Secundarias -->
    <div class="row mt-4 mb-5"></div>
    <header class="row bg-dark justify-content-center align-items-center mt-5 mb-3" style="height:20vh;">
      <h1 class="text-capitalize text-white">CONTACTO</h1>
    </header>

    <!-- Formulario -->
    <section class="row">
      <form class="need-validation" id="formularioCentral">
        <div class="form-row justify-content-around">
          <div class="col-md-5 col-10 mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" value="Mark" required>
            <div class="invalid-tooltip">
              Debes rellenar este campo
            </div>
            <div class="valid-tooltip">
              ¡Bien hecho!
            </div>
          </div>
          <div class="col-md-5 col-10 mb-3">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
            <div class="invalid-tooltip">
              Debes poner tus apellidos
            </div>
            <div class="valid-tooltip">
              ¡Bien hecho!
            </div>
          </div>
          <div class="col-md-5 col-10 mb-3">
            <label for="validationTooltipUsername">E-mail</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
              </div>
              <input type="email" class="form-control" id="correo" aria-describedby="validationTooltipUsernamePrepend"
                required>
              <div class="invalid-tooltip">
                Introduce una dirección de correo válida
              </div>
              <div class="valid-tooltip">
                ¡Bien hecho!
              </div>
            </div>
          </div>
          <div class="col-md-5 col-10 mb-3">
            <label for="validationTooltip03">Ciudad</label>
            <input type="text" class="form-control" id="validationTooltip03" required>
            <div class="invalid-tooltip">
              Introduce el nombre de tu ciudad
            </div>
            <div class="valid-tooltip">
              ¡Bien hecho!
            </div>
          </div>
          <div class="col-md-3 col-10 mb-3">
            <label for="validationTooltip04">País</label>
            <select class="custom-select" id="validationTooltip04" required>
              <option selected disabled value="">Elige un país...</option>
              <option>España</option>
              <option>Francia</option>
              <option>Portugal</option>
              <option>México</option>
              <option>Ecuador</option>
              <option>Venezuela</option>
              <option>Nicaragua</option>
            </select>
            <div class="invalid-tooltip">
              Por favor, selecciona tu país
            </div>
            <div class="valid-tooltip">
              ¡Bien hecho!
            </div>
          </div>
          <div class="col-md-3 col-10 mb-3">
            <label for="validationTooltip05">Código Postal</label>
            <input type="text" class="form-control" id="validationTooltip05" required>
            <div class="invalid-tooltip">
              Por favor, indica tu código postal
            </div>
            <div class="valid-tooltip">
              ¡Bien hecho!
            </div>
          </div>
          <div class="col-md-3 col-10 mb-3">
            <label for="validationTooltip05">Teléfono</label>
            <input type="text" class="form-control" id="validationTooltip05" required>
            <div class="invalid-tooltip">
              Por favor, indica tu número de teléfono
            </div>
            <div class="valid-tooltip">
              ¡Bien hecho!
            </div>
          </div>
          <div class="form-group col-md-6 col-10">
            <label for="exampleFormControlTextarea1">Introduzca el motivo de su consulta</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
            <div class="invalid-tooltip">
              Por favor, indica tu número de teléfono
            </div>
            <div class="valid-tooltip">
              ¡Bien hecho!
            </div>
          </div>
        </div>
        <div class="form-row justify-content-around">
          <button class="btn btn-primary" type="submit" onclick="return false" id="boton">Enviar</button>
        </div>
        </div>

      </form>
    </section>

    <!-- Cabeceras Secundarias -->
    <div class="row mt-5 mb-5"></div>
    <header class="row bg-dark justify-content-center align-items-center mt-5 mb-3" style="height:20vh;">
      <h1 class="text-capitalize text-white">¿DONDE ESTAMOS?</h1>
    </header>

    <!-- Google maps -->
    <section class="row  justify-content-around">
      <div class="col-sm-10 embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d379.46590789671467!2d-3.7002945987821954!3d40.45917309643888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422906d725b573%3A0x7ab598a25d93e52!2sCalle%20de%20Bravo%20Murillo%2C%20255%2C%2028020%20Madrid!5e0!3m2!1ses!2ses!4v1595961859037!5m2!1ses!2ses"
          width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </section>

    <?php 
// Vacio el bufer y lo copio a contenido
// Para que se mue p div de contenido de la página principal

$contenido = ob_get_clean();
include_once "principal.php";

?>
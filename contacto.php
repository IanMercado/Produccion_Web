<?php
require_once('encabezado.php');
?>

<html>
  <body>  
  <br>
<div id="Contacto">
       <h2 class="pt-3">CONTACTO</h2>
       <div class="container">
       <br><p class="text-center pt-5 pb-4"><em>Póngase en contacto con nuestros asesores que los guiarán con sus dudas.</em>
       </p>

  <form class="needs-validation" novalidate action="destino.php" method="POST">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom01">Nombre</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" name="nombre" required>
      <div class="valid-feedback">
        Válido.
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom02">Apellido</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Apellido" name="apellido" required>
      <div class="valid-feedback">
        Válido.
      </div>
    </div>
  </div>
  <div class="form-row">
   <div class="col-md-3 mb-3">
      <label for="validationCustom04">Área de consulta</label>
      <select class="custom-select" id="validationCustom04" name="area_consulta" required>
        <option selected disabled value="">Seleccionar...</option>
        <option>Atención al Cliente</option>
        <option>Cambios y Devoluciones
        <option>Facturación</option>
      </select>

      <div class="invalid-feedback">
         Campo obligatorio
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Correo</label>
      <input type="text" class="form-control" id="validationCustom03" required name="correo">
      <div class="invalid-feedback">
        Por favor ingrese su e-mail.
      </div>
    </div>
    
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Teléfono</label>
      <input type="text" class="form-control" id="validationCustom05" required name="telefono">
      <div class="invalid-feedback">
        Por favor ingrese su teléfono.
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comentario </label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comentario"></textarea>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepto los términos y condiciones
      </label>
      <div class="invalid-feedback">
        Debe aceptar los términos y condiciones antes de enviar.
      </div>
    </div>
  </div>
  <input type="submit" name="enviar" class="btn btn-primary">
</form>
       </div>
</body>
  </html>


<?php
require_once('pie.php');
?>
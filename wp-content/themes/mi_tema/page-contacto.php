<?php get_header(); ?>
<!-- Template Name:contacto -->
<center>
  <form>
  <div class="jumbotron">
  <h1>Contactenos!</h1>
  <div class="form-row"> 
    <div class="form-group col-md-6">
      <label for="inputEmail4">Correo</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Teléfono</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ciudad</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Comuna</label>
      <select id="inputState" class="form-control">
      </select>
    </div>
   </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Registrate!
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>
</center>
<div id="%1$s" class="widget %2$s mt-4">
  <?php get_sidebar() ?>  
</div>


<?php get_footer(); ?>
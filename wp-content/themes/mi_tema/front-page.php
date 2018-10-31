<?php get_header(); ?>
<!-- Template Name: Home -->
<!-- video -->
<div class="div_contenerdor1">
<div class="video">
  <iframe height="315" src="https://www.youtube.com/embed/w9etPj3E3MI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div> 

<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"></div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
</div>

<!--Real Chile-->   
<div class="jumbotron1" style="background-color:blue;"> <center><i class="fas fa-futbol fa-lg fa-spin"></i><h2 style="font-size: 3.0em;color:white;">REAL CHILE</h2></center></div>
<!-- Tarjeta Campeonato-->
<div class="card-columns"style="color: #0b3d3d">
  <div class="card">
  <img class="img-fluid" src="<?php echo get_theme_file_uri('/assets/img/san-ramon.png') ?>" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">"Campeonato Internacional San Ramón 2018"</h5>
        <p class="card-text">Con una muy buena participación y logrando el primer lugar en la categoria 2008-2009 comenzamos un nuevo año. </p>
      </div>
  </div>

<!-- Fin tarjeta-->
<!--Leyenda-->
<div class="card p-3" >
  <blockquote class="blockquote mb-0 card-body"style="font-size: 1,9em;">
    <p>"Si uno gana sin sacrificio lo disfruta, pero es más satisfactorio cuando lo haces luchando".</p>
        <footer class="blockquote-footer" style="color:red;">
        <small class="text-muted">
         <cite title="Source Title" style="color:red;">Andrés Iniesta Futbolista Barcelona FC
        </small>
    </footer>
  </blockquote>
</div>
<!--Fin Leyenda-->
<!--Brasil 2017-->
<div class="card">
    <img class="img-fluid" src="<?php echo get_theme_file_uri('/assets/img/equipo-1.png') ?>" alt="Card image cap">
<div class="card-body">
      <h5 class="card-title">"Brasil 2017"</h5>
      <p class="card-text"> Gira internacional Mundialito 2017, Brasil, Paraguay , Uruguay, Argentina y Chile.
      Nueve años compitiendo internacionalmente.</p>
      <p class="card-text"><small class="text-muted" style="color:red;"> 
      </p>
    </div>
  </div>
  <!-- Fin Brasil 2017-->
  <!--Citacion-->
<div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote2 mb-0"> 
      <h5 class="card-title">CITACIÓN !!!</h5>
          <p>Lunes 02 de julio Caupolican vs Real Chile.</p>
           <p>Hora de salida 09:40 hrs.</p>
           <p> (Lugar de encuentro Estadio Quilicura)</p>
           <p> No te lo pierdas!!</p>
      <footer class="blockquote3-footer">
            <small>
               <cite-1 title="Source Title">Enrique Almarza DT Real Chile</cite>
            </small>
      </footer>
    </blockquote>
 </div>
  <!--Fin citacion-->
  <!--Imagen Bandera-->
    <div class="card">
    <img class="img-fluid" src="<?php echo get_theme_file_uri('/assets/img/bandera.jpg') ?>" alt="Card image">
  </div>
  <!--Zinedine Zidane-->
  <div class="card p-3 text-right">
    <blockquote class="blockquote mb-0">
      <p>"No quiero ser una estrella. Prefiero ser un ejemplo para los niños...</p>
      <footer class="blockquote-footer">
        <small class="text-muted">
           <cite title="Source Title">Zinedine Zidane DT Real Madrid</cite>
        </small>
      </footer>
    </blockquote>
  </div>
  <!--Fin Zinedine-->
  <!--imagen llamado-->
   <div class="card">
    <img class="img-fluid" src="<?php echo get_theme_file_uri('/assets/img/llamado.png') ?>" alt="Card image">
  </div>
   </div>
<!--Formulario de Contacto-->
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

<?php get_footer(); ?>


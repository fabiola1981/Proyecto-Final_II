<?php get_header(); ?>
<!-- Template Name:quienes somos -->
<center><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img id="gol" class="d-block w-50" src="<?php echo get_theme_file_uri('/assets/img/foto2.jpg') ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img id="gol" class="d-block w-50" src="<?php echo get_theme_file_uri('/assets/img/salida-plantel.jpg') ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img id="gol" class="d-block w-50" src="<?php echo get_theme_file_uri('/assets/img/vicho.jpeg') ?>" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>	
</div></center>
<!--Real Chile-->   
<div class="jumbotron1" style="background-color:blue;  font-family: Monoton;"> <center><h2 style="font-size: 3.0em;color:white;">  REAL CHILE</h2></center></div>
<div class="card-group">
  <div class="card tas">
    <img id="nacional" class="card-img-top img-fluid" src="<?php echo get_theme_file_uri('assets/img/estadio-nacional.jpg') ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Nuestra Historia</h5>
      <p class="card-text">La Escuela se inicio en el año 2009 en el Complejo Deportivo "Saturnino" ha participado en distintos campeonatos nacionales e internacionales , siendo estos en Brazil.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card tas">
    <img id="nacional" class="card-img-top img-fluid" src="<?php echo get_theme_file_uri('assets/img/sanramon.jpg') ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Visión</h5>
      <p class="card-text">A corto plazo buscamos la integración de nuestros alumnos, con la mejora de calidad de vida de cada uno de ellos y con el constante perfeccionamiento del cuerpo de profesores.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card tas">
    <img id="nacional" class="card-img-top img-fluid" src="<?php echo get_theme_file_uri('assets/img/elite.jpeg') ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Misión</h5>
      <p class="card-text">Formar de manera integral atraves del futbol a nuestros alumnos, mejorando su calidad de vida con el buen uso del tiempo libre y con una sana recreación.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<?php get_footer(); ?>

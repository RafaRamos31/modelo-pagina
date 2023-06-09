<?php
  include "recursos/info-general.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="estilos/general-styles.css">
  <link rel="stylesheet" href="estilos/inicio-styles.css">
  <title>Document</title>
</head>
<body>
  <header> 
    <?php require_once "componentes/navbar.php" ?>
  </header> 
  <main>
    <hero>
      <h1>Proyecto Avanzando la Nutrición en Honduras</h1>
      <p>Departamento de Copán</p>
      <img class="img-principal" src="https://cdn.aarp.net/content/dam/aarp/health/conditions_treatments/2023/03/1140-heart-health-weight-loss-esp.jpg" alt="banner nutricion">
    </hero>
    <section class="sobre-nosotros">
      <h2>¿Quiénes Somos?</h2>
      <div class="container">
        <p class="text-nosotros">
          <?php echo $info_general["quienes-somos"] ?>
        </p>
        <img class="img-nosotros" src="https://media.istockphoto.com/id/888804786/es/foto/permita-que-sus-manos-decida.jpg?s=612x612&w=0&k=20&c=1zGpVGIKYfLwvh60E3iIn33O6tHYkskx3jvUdF_d5Ws=" alt="ayuda humanitaria">
      </div>
    </section>

    <section class="mision-vision">
      <h2>Misión y Visión</h2>
      <div class="items-container">
        <div class="item">
          <i class="bi bi-book"></i>
          <h3>Misión</h3>
          <?php echo $info_general["mision"]?>
        </div>
        <div class="item">
        <i class="bi bi-search"></i>
          <h3>Visión</h3>
          <?php echo $info_general["vision"]?>
        </div>
      </div>
    </section>

    <section class="organigrama">
      <h2>Organigrama</h2>
      <div class="media-container">
      <img class="organigrama" src="https://www.ticportal.es/wp-content/uploads/matrix-structure-design.png?x25788" alt="organigrama">
      </div>
    </section>

    <section class="valores">
      <h2>Nuestros Valores</h2>
    </section>

    <section class="cobertura">
      <h2>Cobertura</h2>
      <div class="media-container">
      <iframe class="mapa"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d493582.2588882428!2d-89.14612277218666!3d14.875048111687356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f63f61fa675ea93%3A0xb654128df1967c0f!2sConsejo%20Intermunicipal%20Higuito!5e0!3m2!1ses-419!2shn!4v1686173450121!5m2!1ses-419!2shn" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </main>
  <footer>

  </footer>
</body>
</html>
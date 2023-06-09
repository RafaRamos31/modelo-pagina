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
  <link rel="stylesheet" href="estilos/publicar-styles.css">
  <title>Publicar</title>
</head>
<body>
  <header> 
    <?php require_once "componentes/navbar.php" ?>
  </header> 
  <main>
    <h1>Proyecto Avanzando la Nutrición en Honduras</h1>
    <form action="http://localhost/api/noticias.php" method="POST" enctype="multipart/form-data">
      <select name="region" id="region" class="form-control">
        <option>Region</option>
        <option value="basica">Basica</option>
        <option value="rural">Rural</option>
        <option value="urbana">Urbana</option>
        <option value="otro">Otro</option>
      </select>
      <div class="form-group">
        <label for="contenido">Contenido</label>
        <textarea class="form-control" name="contenido" id="contenido" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="multimedia">Adjuntar multimedia (imagenes, videos o documentos)</label>
        <input type="file" class="form-control-file" name="multimedia" id="multimedia">
      </div>
      <button type="submit" class="btn btn-primary">Publicar</button>
    </form>
  </main>
  <footer>

  </footer>
</body>
</html>
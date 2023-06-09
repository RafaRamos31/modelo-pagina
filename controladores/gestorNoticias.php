<?php

function mostrarNoticia($datos_noticia){
  return(
    '<div class="noticia" id="'.$datos_noticia["id-noticia"].'">
        <div class="encabezado">
          <div class="gestor">
            <div class="icon-gestor">

            </div>'
            .$datos_noticia["id-departamento"]
          .'</div>
          <p class="fecha">'.$datos_noticia["fecha-publicacion"].'</p>
        </div>
        <div class="contenido">
          <p>'.$datos_noticia["contenido"].'</p>'
          .mostrarMultimedia($datos_noticia["tipo-multimedia"], $datos_noticia["enlace-recurso"]).
        '</div>
      </div>'
  );
}

function mostrarMultimedia($tipo, mixed $enlace){
  if($tipo == "video"){
    return (
      '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.substr($enlace, -11).'" 
        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
        encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'
    );
  }

  if($tipo == "foto"){
    return (
      '<img src="'.$enlace.'" alt="">'
    );
  }

  if($tipo == "documento"){
    return (
      '<a href="'.$enlace.'" target="_blank" download="document.pdf">Descargar archivo</a>'
    );
  }

  if($tipo == "galeria"){
    return (
      '<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="'.$enlace[0].'" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="'.$enlace[1].'" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="'.$enlace[2].'" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>'
    );
  }
  
  return "";
}


function obtener_datos_noticias($url){
  // Realizar la solicitud GET a la API
  $response = file_get_contents($url);

  // Verificar si se obtuvo una respuesta válida
  if ($response !== false) {
      // Decodificar la respuesta JSON en un array asociativo
      $data = json_decode($response, true);

      // Verificar si se pudo decodificar correctamente el JSON
      if (json_last_error() === JSON_ERROR_NONE) {
          // Aquí puedes utilizar los datos recibidos en formato JSON
          return($data);
      } else {
          // Manejar errores en caso de que la decodificación del JSON falle
          echo 'Error al decodificar la respuesta JSON';
      }
  } else {
      // Manejar errores en caso de que no se pueda realizar la solicitud
      echo 'Error al realizar la solicitud';
  }
  return [];
}
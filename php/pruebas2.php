<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tours Ecuador</title>
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo_destinos.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
    integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="../css/vertical-timeline.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div class="principal">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="titulo_destino">
      <img src="../img/avion.png" class="imagen_a" style="transform: scaleX(-1);">
      <h1 class="titulo">Titulo del destino</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/dos.jpg" class="w3-hover-opacity">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/dos.jpg" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/dos.jpg" class="w3-hover-opacity"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/dos.jpg" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/dos.jpg" class="w3-hover-opacity"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour</h3>
          <ul>
            <li>
              <a href="#itinerario">Itinerario</a>
            </li>
            <li><a href="#descripcion">Descripción</a></li>
            <li>
              <a href="#ubicacion">Ubicación</a>
            </li>
          </ul>
        </div>
      </div>
      <section class="linea-tiempo">
        <div id="myTimeline">
            <div>
                <div data-vticon="true">
                    <i class="fas fa-moon"></i>
                </div>
              <div class="image-column">
                <img src="../img/baños1_1.jpg" alt="Imagen" class="cover-image">
              </div>
              <div class="content-column">
                My Content 2
              </div>
            </div>
            <div>
                My Content 2
            </div>
            <div>
                My Content 3
            </div>
        </div>
        <h3 class="w3-center">Día 2</h3>
        <div id="myTimeline2" class="timeline-red">
            <div data-vtdate="February 2016">
                My Content 2
              My Content 2
            </div>
            <div>
                My Content 3
              My Content 2
              My Content 2
              My Content 2
              My Content 2
              My Content 2
            </div>
          <div>
                My Content 3
            My Content 2
            My Content 2My Content 2
            </div>
          <div>
                My Content 3
            </div>
          <div>
                My Content 3
            </div>
          <div>
                My Content 3
            </div>
          <div>
                My Content 3
            </div>
          <div>
                My Content 3
            </div>
          
        </div>
        <h3 class="w3-center">Día 3</h3>
        <div id="myTimeline3" class="timeline-green">
            <div data-vtdate="February 2016">
                My Content 2
              My Content 2
            </div>
            <div>
                My Content 3
              My Content 2
              My Content 2
              My Content 2
              My Content 2
              My Content 2
            </div>
          <div>
                My Content 3
            My Content 2
            My Content 2My Content 2
            </div>
          <div>
                My Content 3
            </div>
          <div>
                My Content 3
            </div>
          <div>
                My Content 3
            </div>
          <div>
                My Content 3
            </div>
          <div>
                My Content 3
            </div>
          
        </div>
      </section>
      <div class="reservas w3-hide-small">
        <div class="reservas-primero">
          <div id="dias">
            <div class="contenido-reserva-p">
              <p>7 Días&nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-calendar-day"></i>
            </div>
          </div>
          <div id="noches">
            <div class="contenido-reserva-p">
              <p>2 Noches &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-moon"></i>
            </div>
          </div>
          <div id="destino">
            <div class="contenido-reserva-p">
              <p>5 Destinos &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-bus"></i>
            </div>
          </div>
          <div id="alimentacion">
            <div class="contenido-reserva-p">
              <p>Alimentación</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-apple-alt"></i>
            </div>
          </div>
          <div class="contacto-reserva" id="reserva">
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p>Reservar &nbsp;</p>
              </div>
              <div class="icono-reserva">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="contacto-reserva" id="privado">
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p>Cotizar tour privado &nbsp;</p>
              </div>
              <div class="icono-reserva">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="descripcion w3-row">
      <h2>Descripción</h2>
    </div>
    <div class="ubicacion">
      <h2>Ubicación</h2>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/destino.js"></script>
  <script src="../js/translate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../js/vertical-timeline.min.js"></script>
  <script>
  $('#myTimeline, #myTimeline2, #myTimeline3').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: "slide",
    arrows: true
});</script>

</body>

</html>
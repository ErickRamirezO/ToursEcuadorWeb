<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tours Ecuador</title>
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo_destinos.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
  <style>
    .timeline ul {
  background: #1B9AAA;
  padding: 50px 0;
}
.timeline ul li {
  list-style-type: none;
  position: relative;
  width: 6px;
  margin: 0 auto;
  padding-top: 50px;
  background: #fff;
}
.timeline ul li::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 0;
  transform: translateX(-50%);
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: inherit;
}
.timeline ul li div {
  position: relative;
  bottom: 0;
  width: 400px;
  padding: 15px;
  background: #F45B69;
}
.timeline ul li div::before {
  content: '';
  position: absolute;
  bottom: 7px;
  width: 0;
  height: 0;
  border-style: solid;
}
.timeline ul li:nth-child(odd) div { left: 45px; }
.timeline ul li:nth-child(odd) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent #F45B69 transparent transparent;
}
.timeline ul li:nth-child(even) div { left: -439px; }
.timeline ul li:nth-child(even) div::before {
  right: -15px;
  border-width: 8px 0 8px 16px;
  border-color: transparent transparent transparent #F45B69;
}
time {
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 8px;
}
    .timeline ul li::after { transition: background .5s ease-in-out; }
.timeline ul li.in-view::after { background: #F45B69; }
.timeline ul li div {
  visibility: hidden;
  opacity: 0;
  transition: all .5s ease-in-out;
}
.timeline ul li:nth-child(odd) div { transform: translate3d(200px, 0, 0); }
.timeline ul li:nth-child(even) div { transform: translate3d(-200px, 0, 0); }
.timeline ul li.in-view div {
  transform: none;
  visibility: visible;
  opacity: 1;
}@media screen and (max-width: 900px) {
.timeline ul li div { width: 250px; }
.timeline ul li:nth-child(even) div { left: -289px; /*250+45-6*/
}
}
@media screen and (max-width: 600px) {
.timeline ul li { margin-left: 20px; }
.timeline ul li div { width: calc(100vw - 91px); }
.timeline ul li:nth-child(even) div { left: 45px; }
.timeline ul li:nth-child(even) div::before {
  left: -15px;
  border-width: 8px 16px 8px 0;
  border-color: transparent #F45B69 transparent transparent;
}
}
  </style>
</head>

<body>
  <div class="principal">
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
      <section class="timeline linea-tiempo">
        <ul>
          <li>
            <div>
              <time>2016</time>
              Event Here
            </div>
          </li>
          <li>
            <div>
              <time>2015</time>
              Event Here
            </div>
          </li>
          <li>
            <div>
              <time>2014</time>
              Event Here
            </div>
          </li>
          <li>
            <div>
              <time>2014</time>
              Event Here
            </div>
          </li>
          <li>
            <div>
              <time>2014</time>
              Event Here
            </div>
          </li>
          <li>
            <div>
              <time>2014</time>
              Event Here
            </div>
          </li>
          <li>
            <div>
              <time>2014</time>
              Event Here
            </div>
          </li>
          <li>
            <div>
              <time>2014</time>
              Event Here
            </div>
          </li>
          <li>
            <div>
              <time>2014</time>
              Event Here
            </div>
          </li>
        </ul>
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
  <script src="../js/timeline.js"></script>
  <script src="../js/translate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    'use strict';
    
    // define variables
    var items = $(".timeline li");

    // check if an element is in viewport
    function isElementInViewport(el) {
      var rect = el[0].getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= ($(window).height() || document.documentElement.clientHeight) &&
        rect.right <= ($(window).width() || document.documentElement.clientWidth)
      );
    }

    function callbackFunc() {
      items.each(function() {
        if (isElementInViewport($(this))) {
          $(this).addClass("in-view");
        }
      });
    }

    // listen for events
    $(window).on("load resize scroll", callbackFunc);
  });
</script>

</body>

</html>
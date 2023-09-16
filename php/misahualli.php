<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Misahuallí - Tours Ecuador</title>
  <link rel="icon" href="../img/iconToursEcuador.png" type="image/png" sizes="32x32"/>
  <link rel="stylesheet" href="../css/estilo_index.css" type="text/css">
  <link rel="stylesheet" href="../css/estilo_destinos.css" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../css/vertical-timeline.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"
    integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <div class="principal">
    <?php include "sidenav.php";?>
    <?php include "navbar.php";?>
    <div class="titulo_destino">
      <img src="../img/avion.png" class="imagen_a" style="transform: scaleX(-1);">
      <h1 class="titulo">Misahuallí  &nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/misahualliP3.jpg" class="w3-hover-opacity" alt="Playa en Misahualli">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/misahualliP1.jpg" alt="Centro Turístico en Misahuallí" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/misahualliP2.jpg" alt="Playa del Río Napo" class="w3-hover-opacity"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/misahualliP0.jpg" alt="Cavernas de Jumandy" class="w3-hover-opacity"></div>
          <div class="portada-primera1"><img src="../img/misahualliP4.jpg" alt="Paseo en Bote por el río Napo" class="w3-hover-opacity"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Misahuallí</h3>
          <ul>
            <li><a href="#itinerario">Itinerario</a></li>
            <li><a href="#incluye">Incluye</a></li>
            <li><a href="#noIncluye">No incluye</a></li>
            <li><a href="#indicaciones">Indicaciones</a></li>
            <li><a href="#ubicacion">Ubicación</a></li>
          </ul>
        </div>
      </div>
      <section class="linea-tiempo">
        <h3 id="itinerario" class="w3-center">Itinerario</h3>
        <div id="myTimeline">
            <div data-vtdate="Primera parada">
                <div data-vticon="true">
                    <i class="fas fa-volcano"></i>
                </div>
              <div class="image-column">
                <img src="../img/papallactalaguna.jpg" alt="Laguna de Papallacta" class="cover-image">
              </div>
              <div class="content-column misahualli_P1">
                <h3>Laguna de Papallacta</h3>
                <p>Comenzamos con nuestra aventura con una parada en la laguna de Papallacta para admirar los paisajes que ofrece esta espectacular laguna. Seguimos a Baeza en donde se degustará de un delicioso desayuno.</p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/JUMANDY.jpg" class="cover-image" alt="Cavernas de Jumandy">
              </div>
              <div class="content-column misahualli_P2">
                <h3>Cavernas de Jumandy</h3>
                <p>Continuamos con la visita a las Cavernas de Jumandy, uno de los atractivos más sobresalientes de Napo, donde apreciaremos vertientes de agua, espectaculares formaciones de estalactitas y estalagmitas. Disfrutaremos de estas cuevas con una linterna en la cabeza y un guía nativo que nos dará el recorrido, dejando una experiencia inolvidable. Continuamos al almuerzo en el puerto Misahualli y pasaremos a apreciar a los monos, una gran especie de los Micos en el cual podrás disfrutar de sus acrobacias. </p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/playa.jpg" alt="Playa de Misahualli" class="cover-image">
              </div>
              <div class="content-column misahualli_P3">
                <h3>Playa de Misahualli</h3>
                <p>Siguiente parada, Playa de Misahualli del río Napo, reconocida por la presencia de sus arenas blancas y paisajísticas, considerada otra maravilla del Ecuador</p>
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              
              <div class="content-column misahualli_P4">
                <h3>Comunidad Quechua</h3>
                <p>Paseo en Bote por el río Napo con dirección a la comunidad Quechua. Visita a una comunidad Quechua donde podremos observar su forma de vida y tradición ancestral de la tribu como su danza, preparación de Maito y la chicha de Ayahuasca, rituales de shamanes. También cuentan con un mini zoológico con algunas especies del lugar (opcional).</p>
              </div>
            </div>
            <div data-vtdate="Quinta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/letrasMisahualli.jpg" alt="Letras en Misahualli" class="cover-image">
              </div>
              <div class="content-column misahualli_P5">
                <h3>Letras Misahualli</h3>
                <p>Los turistas pueden tomarse fotos y terminar el recorrido.</p>
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="content-column misahualli_P6">
                <p class="misahualli_P6">Relájate durante un regreso cómodo a Quito</p>
              </div>
            </div>
        </div>
      </section>
      <div class="reservas w3-hide-small">
        <div class="reservas-primero">
          <div id="dias">
            <div class="contenido-reserva-p">
              <p>1 <span class="dias">Días</span>&nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-calendar-day"></i>
            </div>
          </div>
          <div id="noches">
            <div class="contenido-reserva-p">
              <p>0 <span class="noches">Noches</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-moon"></i>
            </div>
          </div>
          <div id="destino">
            <div class="contenido-reserva-p">
              <p>5 <span class="destinos">Destinos</span> &nbsp;</p>
            </div>
            <div class="icono-reserva">
              <i class="fa-solid fa-bus"></i>
            </div>
          </div>
          <div id="alimentacion">
            <div class="contenido-reserva-p">
              <p class="alimentacion">Alimentación</p>
            </div>
            <div class="icono-reserva">
              <i class="fas fa-apple-alt"></i>
            </div>
          </div>
           
          <div class="contacto-reserva" id="reserva">
            <a class="reserva-primero" href="https://api.whatsapp.com/send?phone=593984769613" target="new"> 
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p class="reservar">Reservar</p>
              </div>
              <div class="icono-reserva">
               <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>
            </div>
               </a>
          </div>
          
          <div class="contacto-reserva" id="privado">
             <a class="reserva-primero" href="https://api.whatsapp.com/send?phone=593984769613" target="new"> 
            <div class="reserva-primero">
              <div class="contenido-reserva-p">
                <p class="cotizar-tour">Cotizar tour privado</p>
              </div>
              <div class="icono-reserva">
                <i class="fa-brands fa-whatsapp fa-lg"></i>
              </div>

            </div>
             </a>
          </div>
        </div>
      </div>
    </div>
    <div class="descripcion w3-row">
      <h2 id="incluye">Incluye</h2>
      <p class="incluye_misahualli"></p>
    </div>
    <div class="descripcion w3-row">
      <h2 id="noIncluye">No incluye</h2>
      <p class="no_incluye_misahualli"></p>
      
    </div>
    <div class="descripcion w3-row">
      <h2 id="indicaciones">Indicaciones</h2>
      <p class="indicaciones_misahualli"></p>
    </div>
    <div class="ubicacion">
      <h2 id="ubicacion">Ubicación</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.1697811645117!2d-77.6719236761575!3d-1.0330826353994516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d6ba09c7318859%3A0x8b8e6ae6c1a35d7c!2sPuerto%20Misahuall%C3%AD!5e0!3m2!1ses!2sec!4v1694218431505!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php include "footer.php";?>
  </div>
  <script src="../js/destino.js"></script>
  <script src="../js/translate.js"></script>
    <script src="../js/vertical-timeline.min.js"></script>
    <script>
  $('#myTimeline').verticalTimeline({
    startLeft: false,
    alternate: true,
    animate: "slide",
    arrows: true
});</script>
</body>

</html>
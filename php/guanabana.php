<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guanabana - Tours Ecuador</title>
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
      <h1 class="titulo">Guanabana Republic  &nbsp;</h1>
    </div>
    <div class="imagenes-portada">
      <div class="imagenes-portada-primero">
        <img src="../img/guanabanaP0.jpg" class="w3-hover-opacity" alt="Complejo Guanábana Republic">

      </div>
      <div class=" imagenes-portada-segunda">
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/guanabanaP3.jpg" class="w3-hover-opacity" alt="Balneario guanabana republic"></div>
          <div class="portada-primera1"><img src="../img/guanabanaP2.jpg" class="w3-hover-opacity" alt="Complejo Guanábana Republic Ibarra"></div>
        </div>
        <div class="portada-pri">
          <div class="portada-primera1"><img src="../img/guanabanaP1.jpg" class="w3-hover-opacity" alt="Balneario guanabana republic"></div>
          <div class="portada-primera1"><img src="../img/guanabanaP4.jpg" class="w3-hover-opacity" alt="Complejo Guanábana Republic Ibarra"></div>
        </div>
      </div>

    </div>
    <div class="contenedor-informacion">
      <div class="table-of-contents-sticky w3-hide-small">
        <div class="table-of-contents">
          <h3>Tour Guanábana Republic</h3>
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
                <img src="../img/cayambe.jpg" class="cover-image">
              </div>
              <div class="content-column Guanabana_p1" alt="El volcán de cayambe">
                <h3>Cayambe</h3>
                <p>Parada en Cayambe para degustar un
delicioso desayuno con las delicias del lugar, los famosos bizcochos de Cayambe. </p>
              </div>
            </div>
            <div data-vtdate="Segunda parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/miraLago.jpg" class="cover-image" alt="Mirador de Mira Lago">
              </div>
              <div class="content-column Guanabana_p2">
                <h3>Mirador de Mira Lago</h3>
                <p>Visita al Mirador de Mira Lago con grandiosas vistas hacia el Lago San Pablo y al Taita Imbabura, además cuenta con artesanías de la historia de la provincia. En el transcurso del viaje observaremos hermosos paisajes como lagunas, flora y fauna del entorno. Tomamos rumbo por la ciudad de Otavalo, Atuntaqui e Ibarra en dirección hacia el Carchi donde se encuentra el complejo de Guanabana Republic.</p>
              </div>
            </div>
            <div data-vtdate="Tercera parada">
              <div data-vticon="true">
                    <i class="fas fa-water"></i>
                </div>
              <div class="image-column">
                <img src="../img/complejo.jpg" class="cover-image" alt="Complejo Guanábana Republic">
              </div>
              <div class="content-column Guanabana_p3">
                <h3>Complejo Guanábana Republic </h3>
                <p>Parada al complejo Guanábana Republic, incluye la entrada a cuatro Piscinas Temáticas.                          <br>Piscinas River Coco<br> Guanábana sunset.<br> Summer.<br>     Playa sol.   </p> 
              </div>
            </div>
            <div data-vtdate="Cuarta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/yahuarcocha.jpg" class="cover-image" alt="Laguna de Yahuarcocha">
              </div>
              <div class="content-column Guanabana_p4">
                <h3>Laguna de Yahuarcocha</h3>
<p> Tendremosla oportunidad de realizar un paseo en Bote por la hermosa laguna de Yahuarcocha </p>   
              </div>
            </div>
            <div data-vtdate="Quinta parada">
              <div data-vticon="true">
                    <i class="fas fa-camera"></i>
                </div>
              <div class="image-column">
                <img src="../img/cayambeBiscochos.jpg" class="cover-image" alt="Tradicionales bizcochos de Cayambe">
              </div>
              <div class="content-column Guanabana_p5">
                <h3>Cayambe</h3>
                <p>Tiempo de compras en Cayambe, visita fabrica de bizcochos, degustación de una taza de café y bizcochos de Cayambe </p>
              </div>
            </div>
            <div data-vtdate="Fin del Tour">
              <div data-vticon="true">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="content-column ">
                <p Guanabana_p6>Relájate durante un regreso cómodo a Quito</p> 
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
      <p class="Guanabana_incluye"></p>
    </div>
    <div class="descripcion w3-row">
      <h2 id="noIncluye">No incluye</h2>
      <p class="Guanabana_No_incluye"> </p>
      
    </div>
    <div class="descripcion w3-row">
      <h2 id="indicaciones">Indicaciones</h2>
     <p class="Indicaciones_Guanabana"> </p>
    </div>
    <div class="ubicacion">
      <h2 id="ubicacion">Ubicación</h2>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.4195824758563!2d-78.31515163118965!3d0.8100436612931988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2bb9d286040847%3A0xf65c8f6e5cbc85e8!2sGuanabana%20Republic!5e0!3m2!1ses!2sec!4v1694215701194!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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